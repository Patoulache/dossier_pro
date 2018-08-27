<?php


require_once('bdd.php');
/**
 *recup un objet avec toutes les valeurs dedans
 */
class Infos extends Bdd
{
  private $values;


  function __construct($arr)
  {
    $this->values = $arr;
  }
// function connection base dbConnect()
  public function setIdNom(){

    $sql = $this->dbConnect->prepare('INSERT INTO dossiers (ID_P, Prenom, Nom_N_proprio, Nom_U_Proprio, Adresse) VALUES (:id, :prenom, :nom_n, :nom_u, :addr)');
    $sql->bindparam(':id', $this->values['id']);
    $sql->bindparam(':prenom', $this->values['prenom']);
    $sql->bindparam(':nom_n', $this->values['nomnaissance']);
    $sql->bindparam(':nom_u', $this->values['nomusage']);
    $sql->bindparam(':addr', $this->values['adresse']);
    $sql->exectute();
  }

  public function getIdNom(){
    $sql = $this->dbConnect->prepare('SELECT id FROM table WHERE nomnaissance = :nomnaissance AND prenom = :prenom');
    $sql->bindparam(":nomnaissance", $this->values['nom']);
    $sql->bindparam(":prenom", $this->values['prenom']);
    $sql->execute();
    $result = $sql->fetch();
    return $result;
  }
  public function addEntry(){
    //$tout sera dans Nom_F
    //ne me demandez pas pourquoi
    //trop d'entrées dans l'objet $this->values pour les entrées dans la table, alors ça ma gavé, je stock tout ici.
    //
    $tout = json_encode($this->values);
     $sql = $this->dbConnect->prepare('INSERT INTO dossier (Nom_F) VALUE (:nom_f) WHERE id = (SELECT id FROM dossier WHERE nomusage = :nomusage)');
     $sql->bindparam(':nom_f', $tout);
     $sql->bindparam(':nomusage', $this->value["nomusage"]);
     $sql->execute();
  }
}


 ?>
