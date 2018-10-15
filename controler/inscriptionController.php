<?php

require_once 'model/inscriptionModel.php';
/**
 *
 */
class inscription
{
  private $donnees;
  private $nom;
  private $prenom;
  private $pass;
  private $mail;
  private $bdd;

  public function __construct(array $arr)
  {
    $this->donnees = $arr;
    $this->mail = htmlspecialchars($arr['email'], ENT_QUOTES);
    $this->nom = htmlspecialchars($arr['nom'], ENT_QUOTES);
    $this->prenom = htmlspecialchars($arr['prenom'], ENT_QUOTES);
    $this->pass = htmlspecialchars($arr['password'], ENT_QUOTES);
    $hashP = $this->hashPass($this->pass);
    $this->bdd = new inscriptionModel();
    // $this->bdd->CheckExist($this->nom, $this->prenom, $this->mail, $hashP);
  }

  private function hashPass($var){

      $this->pass = password_hash($var, PASSWORD_DEFAULT);

  }

/*   private function setMail(){
    $this->mail = $this->donnes["mail"];
  }
  private function setNom(){
    $this->nom = $this->donnes["nom"];
  }
  private function setPrenom(){
    $this->prenom = $this->donnes["prenom"];
  } */

//if no entry with same name, valid inscription
  public function addId(){

    if ($this->bdd->getId($this->nom, $this->prenom, $this->mail) == null){
      $this->bdd->insertId($this->nom, $this->prenom, $this->mail, $this->pass);
      header('location: index.php?redirect=1');
    } else {
      require_once 'vue/inscription.php';
      echo "<script>alert('Vous êtes déjà inscrit!')</script>";
    }
  }
}


 ?>
