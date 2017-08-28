<?php
namespace AppBundle\Controller;

use AppBundle\Entity\RfidToMatch;
use AppBundle\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\Annotations as Rest; // alias pour toutes les annotations
use Nelmio\ApiDocBundle\Annotation\ApiDoc;




class RfidToMatchController extends Controller
{
    /**
     * This URL aims to retrieve the rfid id that was sent to server to match with a user account during the last 10 sec.
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
     *  section="rfid-to-match",
     *  description="Get last rfid to match with a user account",
     * output={"class"="AppBundle\Entity\RfidToMatch",
     *           "groups" ={"rfid-to-match"}}
     * )
     * @Rest\View(statusCode=Response::HTTP_CREATED ,serializerGroups={"rfid-to-match"})
     * @Rest\Get("/rfid-to-match")
     *
     */
    public function getRfidToMatchAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();

        $now = new \DateTime('now -10 sec');
        $rfidCardsIds =array();
        $rfidCardsIds = $em->getRepository('AppBundle:RfidToMatch')
            ->getLastRfidToMatch($now);
        $rfidCards = array();
        $x=0;
        if(!empty($rfidCardsIds)){
            foreach ($rfidCardsIds as $id) {
                $rfidCards[$x]=$em->getRepository('AppBundle:RfidToMatch')->find($id);
                $x++;
            }

        }
        if(!empty($rfidCards)){
            $lastRfid = $rfidCards[count($rfidCards)-1];
        }
        else $lastRfid ="Pas de  carte à matcher détectée";
        $duplicateRfid= $em->getRepository('AppBundle:User')
            ->findByRfidCard($lastRfid);
        if(!empty($duplicateRfid))  return \FOS\RestBundle\View\View::create(['message' => 'Carte déjà utilisée'], Response::HTTP_BAD_REQUEST);

        return $lastRfid;
    }

}