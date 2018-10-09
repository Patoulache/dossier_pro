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
  function lesQuestions($activity){
    $sql = $this->getBdd()->prepare('SELECT question1, question2, question3, activite_type, table5.question4, question5, chant_at_serv, date_debut, date_fin FROM table5
      JOIN table6 ON table5.question4 = table6.question4 WHERE table5.activite_type = :act AND table5.id_user = :id');
    $sql->bindparam(":act",$activity);
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
  }
  function getTable7(){
    $sql = $this->getBdd()->prepare('SELECT diplome, organisme, `date` FROM table7 WHERE id_user = :id');
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
  }
  function getTable8(){
    $sql = $this->getBdd()->prepare('SELECT texte1 FROM table8 WHERE id_user = :id');
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetchAll(PDO::FETCH_ASSOC);
    return $rep;
  }
  function getTable9(){
    $sql = $this->getBdd()->prepare('SELECT texte2 FROM table9 WHERE id_user = :id');
    $sql->bindparam(":id",$_SESSION['id_user']);
    $sql->execute();
    $rep = $sql->fetch(PDO::FETCH_ASSOC);
    return $rep;
  }
}
 ?>
