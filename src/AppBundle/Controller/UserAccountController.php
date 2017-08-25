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



class UserAccountController extends Controller
{
    /**
     *
     * This URL aims to get a specific user account by id.(Only own info)
     *
     * @ApiDoc(
     *  resource=true,
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
        /* @var $userAccount UserAccount */
        if($this->getUser()!= $userAccount->getUser()){
            return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to get someone else info'], Response::HTTP_UNAUTHORIZED);
        }

        if (empty($userAccount)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User-account not found'], Response::HTTP_NOT_FOUND);
        }
        return $userAccount;
    }
    /**
     *
     *  This URL aims to get a specific user account by id.(Only Admin)
     *
     * @ApiDoc(
     *  resource=true,
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
            $userAccount->setMoneyBalance(0.0);
            $em->persist($userAccount);
            $em->flush();
            return $userAccount;
        } else
            return $form;
    }

}