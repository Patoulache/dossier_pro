<?php

class validationModel {

  private $bdd;
  private $nom = "ROSSO";


    public function __construct() {
      try { $this->bdd = new PDO("mysql:host=localhost;dbname=id7007867_dosier_pro;charset=utf8", "id7007867_root", "sqlcoda#2018!",array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        //  echo "connexion réussi";  
      } catch (Exception $e) {
          echo 'Connexion échouée : ' . $e->getMessage();
        }
    }

    public function valid() {

        // Récupération des variables nécessaires à l'activation
        $login = $_GET['log'];
        $cle = $_GET['cle'];

        // Récupération de la clé correspondant au $nom_usage dans la base de données
        $sql = $this->bdd->prepare("SELECT cle,actif FROM table1 WHERE nom_usage = '$this->nom'");
        if($sql->execute(array("$this->nom" => $login)) && $row = $sql->fetch())
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
            
                  // La requête qui va passer notre champ actif de 0 à 1
                  $stmt = $this->bdd->prepare("UPDATE table1 SET actif = 1 WHERE nom_usage = '$login'");
                  //$stmt->bindParam(':nom', $login);
                  $stmt->execute();
               }
             else // Si les deux clés sont différentes on provoque une erreur...
               {
                  echo "Erreur ! Votre compte ne peut être activé...";
               }
          }
      
      
        //...	
        // Fermeture de la connexion	
        //$this->getBdd() = null;
        // Votre code
        //...
            }
        
        }


  $valid = new validationModel();
  $valid->valid();

?>