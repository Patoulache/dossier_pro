<?php
require_once "bdd.php";
/**
 *
 */
class setupDossierModel extends Bdd
{
  //dans le cas present je vois pas de constructeur
  function __construct()
  {

  }
  function getUserCredential(){
    $sql = $this->getBdd()->prepare('SELECT nom_usage, nom_naissance, prenom, adresse FROM table1 WHERE token = :token');
    // $sql->bindparam(':id', $_SESSION['id_user']);
    $sql->bindparam(':token', $_SESSION['token']);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }
}
 ?>
