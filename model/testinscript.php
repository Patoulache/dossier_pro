<?php

class testMail {

    private $bdd;
    private $nom = "ROSSO";
    private $email = "luluberlu6@hotmail.fr";
    private $cle;

    public function __construct() {
        try { $this->bdd = new PDO("mysql:host=localhost;dbname=id7007867_dosier_pro;charset=utf8", "id7007867_root", "sqlcoda#2018!",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
              echo "connexion réussi";  
          } catch (Exception $e) {
              echo 'Connexion échouée : ' . $e->getMessage();
            }
    }

    public function sendMail() {
        // Génération aléatoire d'une clé
        $this->cle = md5(microtime(TRUE)*100000);
        echo "$this->nom";
        echo "$this->cle";

        // Insertion de la clé dans la base de données (à adapter en INSERT si besoin)
        $sql = $this->bdd->prepare("UPDATE table1 SET cle = ':cle' WHERE nom_usage = ':nom'");
        $sql->bindParam(':cle', $this->cle);
        $sql->bindParam(':nom', $this->nom);
        $sql->execute();


        // Préparation du mail contenant le lien d'activation
        $destinataire = $this->email;
        $sujet = "Activer votre compte" ;
        $entete = "From: inscription@votresite.com" ;

        // Le lien d'activation est composé du login(log) et de la clé(cle)
        $message = 'Bienvenue sur VotreDossierPro.com,

        Pour activer votre compte, veuillez cliquer sur le lien ci dessous
        ou copier/coller dans votre navigateur internet.

        https://testprojetpro.000webhostapp.com/validation.php?log='.urlencode($this->nom).'&cle='.urlencode($this->cle).'


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

$tryit = new testMail();
$tryit->sendMail();
?>