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
    $rep = $sql->fetchAll(PDO::FETCH_NUM);
    return $rep;
  }
  function getExempleActivity($act){
    $sql = $this->getBdd()->prepare('SELECT exemples FROM table4 WHERE activite_type = :act AND id_user= :id');
    $sql->bindparam(":act",$act);
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_NUM);
    return $rep;
  }
  function getInfosActivity($exemple){
    $sql = $this->getBdd()->prepare('SELECT question1, question2, question3, question4, question5 FROM table5 WHERE exemple = :exemple AND id_user= :id');
    $sql->bindparam(":exemple",$exemple);
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_NUM);
    return $rep;
  }
  function getElements($question){
    $sql = $this->getBdd()->prepare('SELECT chant_at_serv, date_debut, date_fin FROM table6 WHERE question4 = :question AND id_user = :id');
    $sql->bindparam(":question",$question);
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_NUM);
    return $rep;
  }
}
 ?>
