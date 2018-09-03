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
    $sql = $this->getBdd()->prepare("SELECT id_user FROM table1 WHERE nom_usage = :nom, prenom = :prenom, email = :mail");
    $sql->bindparam(':nom', $nom);
    $sql->bindparam(':prenom', $prenom);
    $sql->bindparam(':mail', $mail);
    $sql->execute();
    $rep = $sql->fetch();
    return $rep;
  }

  public function insertId($nom, $prenom, $mail, $pass){
    $sql = $this-getBdd()->prepare("INSERT INTO table1(nom_usage, prenom, email, password) VALUES (':nom', ':prenom', ':mail', ':pass)'");
    $sql->bindparam(':nom', $nom);
    $sql->bindparam(':prenom', $prenom);
    $sql->bindparam(':mail', $mail);
    $sql->bindparam(':pass', $pass);
    $sql->execute();
    
    // Génération aléatoire d'une clé
    $cle = md5(microtime(TRUE)*100000);


    // Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
    $stmt = $dbh->prepare("UPDATE table1 SET cle = ':cle' WHERE nom_usage LIKE ':nom'");
    $stmt->bindParam(':cle', $cle);
    $stmt->bindParam(':nom', $nom);
    $stmt->execute();


    // Préparation du mail contenant le lien d'activation
    $destinataire = $email;
    $sujet = "Activer votre compte" ;
    $entete = "From: inscription@votresite.com" ;

    // Le lien d'activation est composé du login(log) et de la clé(cle)
    $message = 'Bienvenue sur VotreDossierPro.com,

    Pour activer votre compte, veuillez cliquer sur le lien ci dessous
    ou copier/coller dans votre navigateur internet.

    http://votredossierpro.com/activation.php?log='.urlencode($nom).'&cle='.urlencode($cle).'


    ---------------
    Ceci est un mail automatique, Merci de ne pas y répondre.';


    mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

    //...	
    // Fermeture de la connexion	
    //...
    // Votre code
    //...
      }
    }

 ?>
