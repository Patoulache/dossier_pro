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
    $this->mail = $arr['email'];
    $this->nom = $arr['nom'];
    $this->prenom = $arr['prenom'];
    $this->pass = $arr['password'];
    $this->hashPass($this->pass);
    $this->bdd = new inscriptionModel();
    $this->bdd->CheckExist();
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
  private function addId(){
    if ($this->bdd->getId($this->nom, $this->prenom, $this->mail) == null){
      $this->bdd->insertId($this->nom, $this->prenom, $this->mail, $this->pass);
      $_SESSION["id"] = $this->bdd->getId($this->nom, $this->prenom, $this->mail);
      require 'vue/dossierPro.html';
    }
  }
}


 ?>
