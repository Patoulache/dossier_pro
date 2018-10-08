<?php

include_once 'bdd.php';
 /**
 *
 */
class checkmailmodel extends Bdd
{

  public function getmail($email){
    $sql = $this->getbdd()->prepare('SELECT id_user FROM table1 WHERE email =:email');
    $sql->bindparam(":email", $email);
    $sql->execute();
    $count = $sql->rowCount();
    return $count;
  }
}
 ?>
