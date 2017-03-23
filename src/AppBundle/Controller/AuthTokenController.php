<?php
namespace AppBundle\Controller;

use AppBundle\Entity\RfidToMatch;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Form\Type\CredentialsType;
use AppBundle\Entity\AuthToken;
use AppBundle\Entity\User;
use AppBundle\Entity\Credentials;
use JMS\Serializer\Annotation\Expose;

class AuthTokenController extends Controller
{
    /**
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
     * @Rest\View(statusCode=Response::HTTP_CREATED ,serializerGroups={"auth-token"})
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


        return $authToken;
    }
    /**
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
        return \FOS\RestBundle\View\View::create(['message' => 'Invalid credentials'], Response::HTTP_BAD_REQUEST);
    }
}