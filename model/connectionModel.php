<?php

include_once 'bdd.php';
/**
 *
 */
class ConnectionModel extends Bdd
{

  function getHashPass($mail){
    $sql = $this->getBdd()->prepare('SELECT pass FROM table1 WHERE email = :mail AND actif > 0');
    $sql->bindparam(':mail', $mail);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }
  function getId($mail){
    $sql = $this->getBdd()->prepare('SELECT id_user FROM table1 WHERE email = :mail');
    $sql->bindparam(':mail', $mail);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }
  function updateToken($email,$token){
    $sql = $this->getBdd()->prepare('UPDATE table1 SET token = :token WHERE email = :email');
    $sql->bindparam(':token',$token);
    $sql->bindparam(':email',$email);
    $sql->execute();
  }
}
 ?>
