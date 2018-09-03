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

    // Test à faire à la maison, sinon celui doit test si le compte est présent et activé.
/*     // Récupération des variables necessaires à la vérification du champ 'actif' de la BDD
$login = $_POST['login'];
 
// Récupération de la valeur du champ actif pour le login $login
$stmt = $dbh->prepare("SELECT actif FROM membres WHERE login like :login ");
if($stmt->execute(array(':login' => $login))  && $row = $stmt->fetch())
  {
   	$actif = $row['actif']; // $actif contiendra alors 0 ou 1
  }
 
 
// Il ne nous reste plus qu'à tester la valeur du champ 'actif' pour
// autoriser ou non le membre à se connecter
 
if($actif == '1') // Si $actif est égal à 1, on autorise la connexion
  {
   //...
   // On autorise la connexion...
   //...
  }
else // Sinon la connexion est refusé...
  {
   //...
   // On refuse la connexion et/ou on previent que ce compte n'est pas activé
   //...
  } */

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
    $sql = $this-getBdd()->prepare("UPDATE table1 SET cle = ':cle' WHERE nom_usage LIKE ':nom'");
    $sql->bindParam(':cle', $cle);
    $sql->bindParam(':nom', $nom);
    $sql->execute();


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
