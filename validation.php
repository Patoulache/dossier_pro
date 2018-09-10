<?php

require ("model/bdd.php");

class validationModel extends Bdd {



    public function __construct() {

    }

    public function valid() {

        // Récupération des variables nécessaires à l'activation
        $login = $_GET['log'];
        $cle = $_GET['cle'];

        // Récupération de la clé correspondant au $nom_usage dans la base de données
        $sql = $this->getBdd()->prepare("SELECT cle,actif FROM table1 WHERE nom_usage = :nom");
        if($sql->execute(array(":nom" => $login)) && $row = $sql->fetch())
          {
            $clebdd = $row['cle'];	// Récupération de la clé
            $actif = $row['actif']; // $actif contiendra alors 0 ou 1
          }
      
      
        // On teste la valeur de la variable $actif récupéré dans la BDD
        if($actif == '1') // Si le compte est déjà actif on prévient
          {
             echo "Votre compte est déjà actif !";
          }
        else // Si ce n'est pas le cas on passe aux comparaisons
          {
             if($cle == $clebdd) // On compare nos deux clés	
               {
                  // Si elles correspondent on active le compte !	
                  echo "Votre compte a bien été activé !";

                  // Création token :
                  $token = md5(microtime(TRUE)*100000);
            
                  // La requête qui va passer notre champ actif de 0 à 1
                  $stmt = $this->getBdd()->prepare("UPDATE table1 SET actif = 1,token = :token WHERE nom_usage = :nom");
                  $stmt->bindParam(':nom', $login);
                  $stmt->bindParam(':token', $token);
                  $stmt->execute();
               }
             else // Si les deux clés sont différentes on provoque une erreur...
               {
                  echo "Erreur ! Votre compte ne peut être activé et va s'autodétruire dans 10 secondes...";
               }
          }
      
    
      }
        
  }

?>