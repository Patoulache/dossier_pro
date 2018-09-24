<?php
include_once "bdd.php";
/**
 *
 */
class autoCompletModel extends Bdd
{

  function lesJobs(){
    $monmot = '%'.$_POST["titrevise"].'%';
    $sql = $this->getBdd()->prepare('SELECT DISTINCT titre_pro_vise FROM table3 WHERE titre_pro_vise LIKE :valeur');
    $sql->bindparam(":valeur", $monmot);
    $sql-> execute();
    $rep = $sql->fetchAll();
    return $rep;
  }
  function pratiquePro(){
    $sql = $this->getBdd()->prepare('SELECT activite_type FROM table3 WHERE titre_pro_vise = :titre');
    $sql->bindparam(":titre", $_POST['pratiquepro']);
    $sql->execute();
    $rep = $sql->fetchAll();
    return $rep;
  }
}


 ?>
