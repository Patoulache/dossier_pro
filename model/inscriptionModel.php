<?php

/**
 *
 */
class inscriptionModel extends Bdd
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
    $sql->bindParam(':cle', $cle);
    $sql->bindParam(':actif', $actif);
    $sql->execute();
    
    // Préparation du mail contenant le lien d'activation
    $destinataire = $email;
    $sujet = "Activer votre compte" ;
    $entete = "From: inscription@votresite.com" ;

    // Le lien d'activation est composé du login(log) et de la clé(cle), url a changer quand le site sera en ligne
    $message = 'Bienvenue sur VotreDossierPro.com,

    Pour activer votre compte, veuillez cliquer sur le lien ci dessous
    ou copier/coller dans votre navigateur internet.

    http://votredossierpro.com/validation.php?log='.urlencode($nom).'&cle='.urlencode($cle).'


    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

      }
    }

 ?>
