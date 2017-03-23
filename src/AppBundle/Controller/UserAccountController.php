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



class UserAccountController extends Controller
{
    /**
     * @Rest\View(serializerGroups={"userAccount"})
     * @Rest\Get("/user-accounts/{user_account_id}")
     */
    public function getUserAccountAction(Request $request)
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
     * @Rest\View(serializerGroups={"account"})
     * @Rest\Get("/lost-account")
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
     * @Rest\View(serializerGroups={"account"})
     * @Rest\Get("/spending-account")
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
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"userAccount"})
     * @Rest\Post("/user-accounts")
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