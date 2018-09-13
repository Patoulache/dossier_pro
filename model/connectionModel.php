<?php

include_once 'bdd.php';
/**
 *
 */
class ConnectionModel extends Bdd
{

  function __construct()
  {
    // code...
  }
  function getHashPass($mail){
    $sql = $this->getBdd()->prepare('SELECT pass FROM table1 WHERE email = :mail');
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
}
 ?>
