<?php

/**
 *
 */
class inscriptionModel extends bdd
{

  public function __construct()
  {

  }

  public function getId($nom, $prenom, $mail){
    $sql = $this->getBdd()->prepare('SELECT id FROM table1 WHERE nom = :nom, prenom = :prenom, email = :mail');
    $sql->bindparam(':nom', $nom);
    $sql->bindparam(':prenom', $prenom);
    $sql->bindparam(':mail', $mail);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }

  public function insertId($nom, $prenom, $mail, $pass){
    $sql = $this-getBdd()->prepare('INSERT INTO table1 VALUES(:nom, :prenom, :mail, $pass)');
    $sql->bindparam(':nom', $nom);
    $sql->bindparam(':prenom', $prenom);
    $sql->bindparam(':mail', $mail);
    $sql->bindparam(':pass', $pass);
    $sql->execute();
  }
}

 ?>
