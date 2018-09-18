<?php
include_once "bdd.php";
/**
 *
 */
class autoCompletModel extends Bdd
{

  function __construct()
  {
    // code...
  }
  function lesJobs(){
    $monmot = '%'.$_POST["titrevise"].'%';
    $sql = $this->getBdd()->prepare('SELECT DISTINCT titre_pro_vise FROM table3 WHERE titre_pro_vise LIKE :valeur');
    $sql->bindparam(":valeur", $monmot);
    $sql-> execute();
    $rep = $sql->fetchAll();
    return $rep;
  }
}


 ?>
