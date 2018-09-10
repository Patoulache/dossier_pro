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
  // juste pour avoir les métadonnées de la colonne 0, ceci n'etait rien d'autre qu'un test inutile pour ce projet
  // function metadonnees(){
  //   $sql = $this->getBdd()->prepare('SELECT * FROM table1');
  //   $sql->execute();
  //   $meta = $sql->getColumnMeta(0);
  //   var_dump($meta);
  //   return $meta;
  // }
  function getHashPass($mail){
    $sql = $this->getBdd()->prepare('SELECT pass FROM table1 WHERE email = :mail');
    $sql->bindparam(':mail', $mail);
    $sql->exectute();
    $rep = $sql->fetch();
    return $rep;
  }
}
 ?>
