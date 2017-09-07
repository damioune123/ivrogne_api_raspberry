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

    public function getUserOrders($userAccount, $debut){
        $em = $this->getDoctrine()->getManager();

        $query = $em->createQuery(
            'SELECT o
            FROM AppBundle:Order o
            WHERE o.customer_user_account = :user_account_id
            ORDER BY o.id DESC
            LIMIT 1O OFFSET :debut'
        )->setParameters(array('debut'=> $debut,'user_account_id'=>$userAccount));
        return  $query->getResult();
    }

    public function getUserDebit($userAccount, $debut){
        $sql = " 
        SELECT mf.*
        FROM  money_flow mf
        WHERE mf.debit_user_account=".$userAccount."
        ORDER BY mf.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getUserCredit($userAccount, $debut){
        $em = $this->getEntityManager();

        $sql = " 
        SELECT mf.*
        FROM  money_flow mf
        WHERE mf.credit_user_account=".$userAccount."
        ORDER BY mf.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBarmanOrders( $debut){
        $sql = " 
        SELECT o.*
        FROM  orders o, user_accounts ua
        WHERE ua.type = 'register'
        AND  o.customer_user_account= ua.id  
        ORDER BY o.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBarmanRegisterOrders( $debut){
        $sql = " 
        SELECT o.*
        FROM  orders o, user_accounts ua
        WHERE o.register_user_account= ua.id
        AND ua.type = 'register'
        ORDER BY o.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function getBankDebit( $debut){
        $sql = " 
        SELECT mf.*
        FROM  money_flow mf, user_accounts ua
        WHERE mf.debit_user_account= ua.id
        AND ua.type = 'bank'
        ORDER BY mf.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getBankCredit( $debut){
        $sql = " 
        SELECT mf.*
        FROM  money_flow mf, user_accounts ua
        WHERE mf.credit_user_account= ua.id
        AND ua.type = 'bank'
        ORDER BY mf.id DESC
        LIMIT 10 OFFSET ".$debut;

        $em = $this->getEntityManager();
        $stmt = $em->getConnection()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
