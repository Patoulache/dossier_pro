<?php

include_once 'bdd.php';
 /**
 *
 */
class checkmailmodel extends Bdd
{

  public function __construct()
  {

  }
  public function getmail($email){
    $sql = $this->getbdd()->prepare('SELECT email FROM table1 WHERE email = :email');
    $sql->bindparam(":email", $email);
    $sql->execute();
    $count = $sql->fetch();
    return $count;
  }
}
 ?>
