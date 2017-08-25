<?php

namespace AppBundle\Repository;
use AppBundle\Entity\UserAccount;
/**
 * UserAccountRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserAccountRepository extends \Doctrine\ORM\EntityRepository
{
    public function getRegisterAccount(){
        $sql = " 
        SELECT UA.id
        FROM user_accounts UA, users U
        WHERE UA.user=U.id
        AND   U.role=\"ROLE_BARMAN\"
        And   UA.type=\"register\"
    ";

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function getBankAccount(){
        $sql = " 
        SELECT UA.id
        FROM user_accounts UA, users U
        WHERE UA.user=U.id
        AND   U.role=\"ROLE_BARMAN\"
        And   UA.type=\"bank\"
    ";

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function getLostAccount(){
        $sql = " 
        SELECT UA.id
        FROM user_accounts UA
        WHERE UA.type=\"lost\"
    ";
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function getSpendingAccount(){
        $sql = " 
        SELECT UA.id
        FROM user_accounts UA
        WHERE UA.type=\"spending\"
    ";
        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetch();
    }
}
