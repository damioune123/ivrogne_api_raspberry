<?php

namespace AppBundle\Repository;

/**
 * AuthTokenRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AuthTokenRepository extends \Doctrine\ORM\EntityRepository
{
    public function getLastRfidAuthTokens($now){

        $sql = " 
        SELECT AT.id
        FROM auth_tokens AT
        WHERE AT.is_log_with_rfid!=0
        AND   AT.createdAt>=\"".date_format($now, 'Y/m/d H:i:s')."\"
        
    ";

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
