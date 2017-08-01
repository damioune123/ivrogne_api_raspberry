<?php
namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use AppBundle\Entity\User;
use AppBundle\Entity\UserAccount;
use AppBundle\Form\Type\UserType;


class UserController extends Controller
{
    //SIGN IN -PUBLIC ==> pour les inscriptions

    /**
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"user"})
     * @Rest\Post("/users")
     */
    public function postUserAction(Request $request)
    {
        $user = new User();
        $form = $this->createForm(UserType::class, $user, ['validation_groups' => ['Default', 'New']]);
        $em=$this->getDoctrine()->getManager();

        $promotion=$em->getRepository('AppBundle:Promotion')
                    ->findByPromotionName("simple")[0];

        $form->submit($request->request->all()); // Validation des données
        if ($form->isValid()) {
            $encoder = $this->get('security.password_encoder');
            // le mot de passe en claire est encodé avant la sauvegarde
            $encoded = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($encoded);
            $user->setRole('ROLE_USER');
            $user->setMoneyLimit(0.0);
            $user->setPromotion($promotion);
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            return $user;
        } else
            return $form;
    }

    //user only ==> récupérer ses propres infos
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Get("/users/{user_id}")
     */
    public function getUserByUserAction(Request $request)
    {

        return $this->getUserByAdminAction($request, true);
    }

    //user only ==> supprimer son propre compte
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"user"})
     * @Rest\Delete("/users/{id}")
     */
    public function removeUserByUserAction(Request $request)
    {
      return $this->removeUserBySuperAdminAction($request, true);
    }
    //USER only ==> put de son propre compte
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Put("/users/{id}")
     */
    public function updateUserByUserAction(Request $request)
    {
        return $this->updateUserBySuperAdminAction($request, true, true);
    }

    //USER only ==> put de son propre comptes
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Patch("/users/{id}")
     */
    public function patchUserByUserAction(Request $request)
    {
        return $this->patchUserBySuperAdminAction($request, true);
    }


    //ADMIN ONLY ==> récupérer les infos de tous les utilisateurs en une fois
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Get("/admin/users")
     */
    public function getUsersByAdminAction(Request $request)
    {
        $users = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->findAll();
        /* @var $users User[] */

        return $users;
    }

    /**
     * @Rest\View(serializerGroups={"userLimited"})
     * @Rest\Get("/limited-users")
     */
    public function getLimitedUsersAction(Request $request)
    {
        $users = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->findAll();
        /* @var $users User[] */

        return $users;
    }

    //admin only ==> récupérer des infos sur sur un utilisateur quelconque
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Get("/admin/users/{user_id}")
     */
    public function getUserByAdminAction(Request $request, $restrictedAccess = false)
    {
        $user = $this->get('doctrine.orm.entity_manager')
            ->getRepository('AppBundle:User')
            ->find($request->get('user_id'));
        /* @var $user User */


        if (empty($user)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        if ($restrictedAccess){
            if($this->getUser()!= $user){
                return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to get someone else info'], Response::HTTP_UNAUTHORIZED);
            }
        }

        return $user;
    }

    //super-admin only ==> supprimer un utilisateur
    /**
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"user"})
     * @Rest\Delete("/super-admin/users/{id}")
     */
    public function removeUserBySuperAdminAction(Request $request, $restrictedAccess = false)
    {
        $em = $this->get('doctrine.orm.entity_manager');
        $user = $em->getRepository('AppBundle:User')
            ->find($request->get('id'));
        /* @var $user User */


        if ($user) {
            if ($restrictedAccess)
            {
                if($this->getUser()!= $user){
                    return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to delete someone else info'], Response::HTTP_UNAUTHORIZED);
                }
            }
            $em->remove($user);
            $em->flush();
        }
    }


    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Put("/admin/users/{id}")
     */
    public function updateUserBySuperAdminAction(Request $request, $clearMissing = true, $restrictedAccess = false)
    {
        $em=$this->getDoctrine()->getManager();
        $user = $em
            ->getRepository('AppBundle:User')
            ->find($request->get('id')); // L'identifiant en tant que paramètre n'est plus nécessaire
        /* @var $user User */

        if (empty($user)) {
            return \FOS\RestBundle\View\View::create(['message' => 'User not found'], Response::HTTP_NOT_FOUND);
        }
        if ($restrictedAccess){
            if($this->getUser()!= $user){
                return \FOS\RestBundle\View\View::create(['message' => 'Unauthorized to update/put someone else info'], Response::HTTP_UNAUTHORIZED);
            }
        }
        if ($clearMissing) { // Si une mise à jour complète, le mot de passe doit être validé
            $options = ['validation_groups'=>['Default', 'FullUpdate']];
        } else {
            $options = []; // Le groupe de validation par défaut de Symfony est Default
        }

        $form = $this->createForm(UserType::class, $user, $options);


        $form->submit($request->request->all(), $clearMissing);

        if ($user->getPlainPassword() !== null) {
            $encoder = $this->get('security.password_encoder');
            $encoded = $encoder->encodePassword($user, $user->getPlainPassword());
            $user->setPassword($encoded);
        }


        if ($form->isValid()) {
            // l'entité vient de la base, donc le merge n'est pas nécessaire.
            // il est utilisé juste par soucis de clarté
            $em->merge($user);
            $em->flush();
            return $user;
        } else {
            return $form;
        }
    }

    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Patch("/admin/users/{id}")
     */
    public function patchUserBySuperAdminAction(Request $request, $restrictedAccess = false)
    {
        return $this->updateUserBySuperAdminAction($request, false, $restrictedAccess);
    }
    /**
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Patch("/users/{id}")
     */
    public function patchUserction(Request $request, $restrictedAccess = false)
    {
        return $this->updateUserBySuperAdminAction($request, false, $restrictedAccess);
    }


}
