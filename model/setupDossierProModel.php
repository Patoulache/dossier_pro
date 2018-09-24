<?php
require_once "bdd.php";
/**
 *
 */
class setupDossierModel extends Bdd
{
  //dans le cas present je vois pas de constructeur

  function getUserCredential(){
    $sql = $this->getBdd()->prepare('SELECT nom_usage, nom_naissance, prenom, adresse FROM table1 WHERE token = :token');
    // $sql->bindparam(':id', $_SESSION['id_user']);
    $sql->bindparam(':token', $_SESSION['token']);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }
  function getTitrePro(){
    $sql = $this->getBdd()->prepare('SELECT titre_pro_vise FROM table2 WHERE id_user = :id');
    $sql->bindparam(':id', $_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }
  function getLesActivitys($titre){
    $sql = $this->getBdd()->prepare('SELECT activite_type FROM table3 WHERE titre_pro_vise = :titre');
    $sql->bindparam(":titre", $titre);
    $sql->execute();
    $rep = $sql->fetchAll();
    return $rep;
  }
}
 ?>
