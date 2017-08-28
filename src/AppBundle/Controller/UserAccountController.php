<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\UserAccount;
use AppBundle\Form\Type\UserAccountType;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\QueryParam;



class UserAccountController extends Controller
{
    /**
     *
     * This URL aims to get a specific user account by id.(Only own info)
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Get user account info by id.(Only own info)",
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"userAccount"}}
     *
     * )
     * @Rest\View(serializerGroups={"userAccount"})
     * @Rest\Get("/user-accounts/{user_account_id}")
     */
    public function getUserAccountAction(Request $request)
    {
        $userAccount = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:UserAccount')
            ->find($request->get('user_account_id'));
        if (empty($userAccount)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User-account not found'], Response::HTTP_NOT_FOUND);
        }
        /* @var $userAccount UserAccount */
        if($this->getUser()!= $userAccount->getUser()){
            return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to get someone else info'], Response::HTTP_UNAUTHORIZED);
        }


        return $userAccount;
    }
    /**
     *
     *  This URL aims to get a specific user account by id.(Only Admin)
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Get user account info by id.(Only admin)",
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"userAccount"}}
     *
     * )
     * @Rest\View(serializerGroups={"userAccount"})
     * @Rest\Get("/admin/user-accounts/{user_account_id}")
     */
    public function getUserAccountByAdminAction(Request $request)
    {
        $userAccount = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:UserAccount')
            ->find($request->get('user_account_id'));
        /* @var $userAccount UserAccount */

        if (empty($userAccount)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User-account not found'], Response::HTTP_NOT_FOUND);
        }
        return $userAccount;
    }

    /**
     *
     * This URL aims to get the lost account (used to allow admin to declare lost products).(Only Admin)
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Get lost account info.(Only Admin)",
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"account"}}
     *
     * )
     * @Rest\View(serializerGroups={"account"})
     * @Rest\Get("/admin/lost-account")
     */
    public function getlostAccountAction(Request $request)
    {

        $userAccount = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:UserAccount')
            ->findByType('lost');
        /* @var $userAccount UserAccount */

        if (empty($userAccount)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User-account not found'], Response::HTTP_NOT_FOUND);
        }
        return $userAccount;
    }
    /**
     *
     * This URL aims to get the spending account (used to allow admin to declare purchased products).(Only Admin)
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Get spending account info.(Only Admin)",
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"account"}}
     *
     * )
     * @Rest\View(serializerGroups={"account"})
     * @Rest\Get("/admin/spending-account")
     */
    public function getspendingAccountAction(Request $request)
    {
       $userAccount = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:UserAccount')
            ->findByType('spending');
        /* @var $userAccount UserAccount */

        if (empty($userAccount)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User-account not found'], Response::HTTP_NOT_FOUND);
        }

        return $userAccount;
    }


    /**
     *  * This URL aims to create an account.
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Create a user account.",
     *  input={"class"=UserAccountType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"userAccount"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"userAccount"})
     * @Rest\Post("/super-admin/user-accounts")
     */
    public function postUserAccountAction(Request $request)
    {
        $userAccount = new UserAccount();
        $form = $this->createForm(UserAccountType::class, $userAccount);
        $form->submit($request->request->all());
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($userAccount);
            $em->flush();
            return $userAccount;
        } else
            return $form;
    }
    /**
     *  This URL aims to change a nefew's userAccount moneyLimit. This will change the admin's moneyAllowed as well.
     *  The id is the nefew useraccount id.
     *
     * @ApiDoc(
     *  resource=true,
     *  headers={
     *         {
     *             "name"="X-Auth-Token",
     *             "description"="Authorization key",
     *             "required"=true
     *         }
     *  },
     *  section="user-accounts",
     *  description="Change nefew Money limit (only admin)",
     *  output={"class"="AppBundle\Entity\UserAccount",
     *           "groups" ={"userAccount"}}
     *
     * )
     * @QueryParam(name="money_limit", requirements="\d+", description="New nefew money limit")
     * @Rest\View(serializerGroups={"userAccount"})
     * @Rest\Patch("/admin/users-acccounts/money-limit/{nefew_account_id}")
    */
    public function changeMoneyLimitNefewAction(Request $request)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        /* @var $userAccount UserAccount */
        $userAccount = $em
            ->getRepository('AppBundle:UserAccount')
            ->find($request->get('nefew_account_id'));
        $oldMoneyLimit = $userAccount->getMoneyLimit();
        if(empty($userAccount)){
            return \FOS\RestBundle\View\View::create(['message' => 'nefew account not found'], Response::HTTP_NOT_FOUND);
        }
        if($this->getUser()!=$userAccount->getUser()->getGodfather()){
            return \FOS\RestBundle\View\View::create(['message' => 'Not a nefew of current admin'], Response::HTTP_UNAUTHORIZED);
        }
        $newMoneyLimit =intval($request->get('money_limit'));
        if($userAccount->getMoneyBalance()<0.0 and $newMoneyLimit< abs($userAccount->getMoneyBalance())){
            return \FOS\RestBundle\View\View::create(['message' => 'The nefew has a money balance under the money limit'], Response::HTTP_UNAUTHORIZED);
        }
        if($newMoneyLimit <=0){
            return \FOS\RestBundle\View\View::create(['message' => 'The money limit has to be a positive integer'], Response::HTTP_UNAUTHORIZED);

        }
        /* @var $adminAccount UserAccount */
        $adminAccount =$this->getUser()->getUserAccounts()[0];
        if($newMoneyLimit> $adminAccount->getCreditToAllowMax()-$adminAccount->getCreditAllowed())
        {
            return \FOS\RestBundle\View\View::create(['message' => 'The money limit is too high. Max alloed :'.$adminAccount->getCreditToAllowMax().' / already allowed : '.$adminAccount->getCreditAllowed()], Response::HTTP_UNAUTHORIZED);
        }
        $adminAccount->setCreditAllowed($adminAccount->getCreditAllowed()+$newMoneyLimit-$oldMoneyLimit);
        $userAccount->setMoneyLimit($newMoneyLimit);
        $em->merge($userAccount);
        $em->merge($adminAccount);
        $em->flush();
        $tab = [$userAccount, $adminAccount];
        return $tab;
    }

}