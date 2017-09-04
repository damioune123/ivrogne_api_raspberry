<?php
namespace AppBundle\Controller;

use AppBundle\Entity\RfidToMatch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Form\Type\CredentialsType;
use AppBundle\Entity\AuthToken;
use AppBundle\Entity\User;
use AppBundle\Entity\Credentials;
use JMS\Serializer\Annotation\Expose;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use ElephantIO\Client;
use ElephantIO\Engine\SocketIO\Version1X;
use ElephantIO\Exception\ServerConnectionFailureException;

use FOS\RestBundle\Request\ParamFetcher;
use FOS\RestBundle\Controller\Annotations\RequestParam;

class AuthTokenController extends Controller
{
    /**
     * This URL aims to create a token by sending the credential information. This is needed in further headers' request to authenticate user.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="auth-tokens",
     *  description="Create a web token using a user credentials' information.",
     *  input={"class"=CredentialsType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\AuthToken",
     *           "groups" ={"auth-token"}}
     *
     * )
     * @Route( defaults={"_format": "json"})
     * @Rest\View(statusCode=Response::HTTP_CREATED ,serializerGroups={"auth-token"})
     * @Rest\Post("/auth-tokens")
     *
     */
    public function postAuthTokensAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $credentials = new Credentials();
        $form = $this->createForm(CredentialsType::class, $credentials);

        $form->submit($request->request->all());

        if (!$form->isValid()) {
            return $form;
        }

        $user = $em->getRepository('AppBundle:User')
            ->findOneByUsername($credentials->getLogin());

        if (!$user) { // L'utilisateur n'existe pas
            return $this->invalidCredentials();
        }

        $encoder = $this->get('security.password_encoder');
        $isPasswordValid = $encoder->isPasswordValid($user, $credentials->getPassword());

        if (!$isPasswordValid) { // Le mot de passe n'est pas correct
            return $this->invalidCredentials();
        }

        $authToken = new AuthToken();
        $authToken->setValue(base64_encode(random_bytes(50)));
        $authToken->setIsLogWithRfid(false);
        $authToken->setCreatedAt(new \DateTime('now'));
        $authToken->setUser($user);

        $em->persist($authToken);
        $em->flush();


        
        return $authToken;
    }

    /**
     *
     * This URL aims to create a token by sending the id of a rfid card. This is needed in further headers' request to authenticate user.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="auth-tokens",
     *  description="Create a web token using a rfid card id.",
     *   parameters={
     *      {"name"="card_id", "dataType"="string", "required"=true, "description"="rfid card id"}
     *  },
     *  output={"class"="AppBundle\Entity\AuthToken",
     *           "groups" ={"auth-token"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED ,serializerGroups={"auth-token"})
     * @RequestParam(name="source", requirements="(tablette|commande)", nullable=false)
     * @Rest\Post("/rfid-auth-tokens")
     *
     */
    public function postRfidAuthTokensAction(Request $request)

    {
        $em=$this->getDoctrine()->getManager();
        

        $user = $em->getRepository('AppBundle:User')
            ->findOneByRfidCard($request->get('card_id'));
        /* @var $user User */
        //if($user->getRfidCard() == null) $user =false;

        if (!$user) { // L'utilisateur n'existe pas
            if(strlen($request->get('card_id'))<5)
                return $this->invalidCredentials();
            $rfidToMatch= new RfidToMatch();
            $rfidToMatch->setCreatedAt(new \DateTime('now'));
            $rfidToMatch->setValue($request->get('card_id'));

            $em->persist($rfidToMatch);
            $em->flush();
            return "New Card rfid to match stored !";
        }

        $authToken = new AuthToken();
        $authToken->setValue(base64_encode(random_bytes(50)));
        $authToken->setCreatedAt(new \DateTime('now'));
        $authToken->setIsLogWithRfid(true);
        $authToken->setUser($user);

        $em->persist($authToken);
        $em->flush();

        $authToken->setException("OK");
        try{
            $connection = new Version1X('http://127.0.0.1:5000');
            $client = new Client($connection);
            $client->initialize();
            if($request->request->get('source')=="tablette"){
                $authToken->setSource("tablette");
                $client->emit('broadcastphp', ['token' => $authToken->getValue(),'userId' => $authToken->getUser()->getId(),"firstname"=>$authToken->getUser()->getFirstname(), "lastname"=>$authToken->getUser()->getLastname()]);

            }
            else{
                $authToken->setSource("commande");
            }
            $client->close();

            return json_encode($client);
        }catch (ServerConnectionFailureException $e){
            $authToken->setException("node_server_down");

        }
        finally{
            return $authToken;
        }


    }
    /**
     *
     * This URL aims to get the last token that was created during the last 10 sec (with an rfid cardid). This is risked in term of security and will be removed whenever the Websocket feature will be implemented.
     * Ths is used commonly to connect to a client after a user athenticate with his rfid card.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="auth-tokens",
     *  description="Get last rfid web token.",
     *  output={"class"="AppBundle\Entity\AuthToken",
     *           "groups" ={"auth-token"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED ,serializerGroups={"auth-token"})
     * @Rest\Get("/rfid-auth-tokens")
     *
     */
    public function getRfidAuthTokensAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();

        $now = new \DateTime('now -10 sec');
        $rfidCardsIds =array();
        $rfidCardsIds = $em->getRepository('AppBundle:AuthToken')
                        ->getLastRfidAuthTokens($now);
        $rfidCards = array();
        $x=0;
        if(!empty($rfidCardsIds)){
            foreach ($rfidCardsIds as $id) {
                $rfidCards[$x]=$em->getRepository('AppBundle:AuthToken')->find($id);
                $x++;
            }

        }
        if(!empty($rfidCards)){
            $lastRfid = $rfidCards[count($rfidCards)-1];
        }
        else $lastRfid ="Pas de login par carte détecté";



        return $lastRfid;
    }




    /**
     * This URL aims to remove a token by id.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="auth-tokens",
     *  description="Delete a web token by id.",
     *  output={"class"="AppBundle\Entity\AuthToken",
     *           "groups" ={"auth-token"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT ,serializerGroups={"auth-token"})
     * @Rest\Delete("/auth-tokens/{id}")
     */
    public function removeAuthTokenAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $authToken = $em->getRepository('AppBundle:AuthToken')
            ->find($request->get('id'));
        /* @var $authToken AuthToken */

        $connectedUser = $this->get('security.token_storage')->getToken()->getUser();

        if ($authToken && $authToken->getUser()->getId() === $connectedUser->getId()) {
            $em->remove($authToken);
            $em->flush();
        } else {
            throw new \Symfony\Component\HttpKernel\Exception\BadRequestHttpException();
        }
    }

    private function invalidCredentials()
    {
        return \FOS\RestBundle\View\View::create(['message' => 'Invalid credentials'], Response::HTTP_UNAUTHORIZED);
    }
}