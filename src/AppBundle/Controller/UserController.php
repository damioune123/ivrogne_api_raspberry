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
use Nelmio\ApiDocBundle\Annotation\ApiDoc;



class UserController extends Controller
{

    /**
     *
     *
     * This URL aims to create a user.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Create a user",
     *  input={"class"=UserType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED,serializerGroups={"user"})
     * @Rest\Post("/users")
     *
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

    /**
     * This URL aims to allow a user to get his own info.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Get a user by id (only own info)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Get("/users/{user_id}")
     */
    public function getUserByUserAction(Request $request)
    {
        return $this->getUserByAdminAction($request, true);
    }

    /**
     * This URL aims to delete a user with is id.(Only own info)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Delete a user by id.(Only own info)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(statusCode=Response::HTTP_NO_CONTENT, serializerGroups={"user"})
     * @Rest\Delete("/users/{id}")
     */
    public function removeUserByUserAction(Request $request)
    {
      return $this->removeUserBySuperAdminAction($request, true);
    }

    /**
     *  * This URL aims to replace a user with is id.(Only own info)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Get a user by id.(Only own info)",
     *  input={"class"=UserType::class, "name"=""},
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Put("/users/{id}")
     */
    public function updateUserByUserAction(Request $request)
    {
        return $this->updateUserBySuperAdminAction($request, true, true);
    }

    /**
     *
     *  This URL aims to change a user's information with is id. (Only own info)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  input={"class"=UserType::class, "name"=""},
     *  description="Patch a user by id.(Only own info)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Patch("/users/{id}")
     */
    public function patchUserByUserAction(Request $request)
    {
        return $this->patchUserBySuperAdminAction($request, true);
    }

    /**
     * This URL aims to get all users. (FULL INFORMATION - ONLY ADMIN ACCESS). To use with moderation, /api/limited-users is prefered.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Get users info - FULL (Only admin).",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     *
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
     * This URL aims to get all users. (LIGHT INFORMATION - ALL ACCESS). This is intendended to provide a safe resume of user's information that are available to everyone.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Get users info - Light information. ALL Access",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"userLimited"}}
     *
     * )
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

    /**
     *  This URL aims to allow an admin  to get info about any user.(ADMIN ONLY)
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Get a user by id (only admin)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
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

    /**
     * This URL aims to allow a super-admin to delete any user.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Delete another user by id (only admin)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
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
            else if($user->getRole()=="ROLE_SUPER_ADMIN" ||$user->getRole()=="ROLE_BARMAN"){
                return \FOS\RestBundle\View\View::create(['message' => 'SUPER ADMIN/ BARMAN cannot be deleted'], Response::HTTP_UNAUTHORIZED);
            }
            $em->remove($user);
            $em->flush();
        }
    }


    /**
     * This URL aims to allow a super admin to replace someone else's information.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  description="Replace another user's information (only super-admin)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Put("/super-admin/users/{id}")
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
     * This URL aims to allow a super-admin to change some  someone else's information.
     *
     * @ApiDoc(
     *  resource=true,
     *  section="users",
     *  input={"class"=UserType::class, "name"=""},
     *  description="Patch anoter user by id (only super-admin)",
     *  output={"class"="AppBundle\Entity\User",
     *           "groups" ={"user"}}
     *
     * )
     * @Rest\View(serializerGroups={"user"})
     * @Rest\Patch("/super-admin/users/{id}")
     */
    public function patchUserBySuperAdminAction(Request $request, $restrictedAccess = false)
    {
        return $this->updateUserBySuperAdminAction($request, false, $restrictedAccess);
    }

}
