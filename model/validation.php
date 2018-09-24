<?php

require_once ("bdd.php");

class validationModel extends Bdd {


    public function valid() {

        // Récupération des variables nécessaires à l'activation
        $login = $_GET['log'];
        $cle = $_GET['cle'];

        // Récupération de la clé correspondant au $nom_usage dans la base de données
        $sql = $this->getBdd()->prepare("SELECT id_user,nom_usage,actif FROM table1 WHERE cle = :cle");
        if($sql->execute(array(":cle" => $cle)) && $row = $sql->fetch())
          {
            $nomUsage = $row['nom_usage'];	// Récupération de la clé
            $actif = $row['actif']; // $actif contiendra alors 0 ou 1
            $iduser = $row['id_user'];
          }


        // On teste la valeur de la variable $actif récupéré dans la BDD
        if($actif == '1') // Si le compte est déjà actif on prévient
          {
             echo "Votre compte est déjà actif !";
          }
        else // Si ce n'est pas le cas on passe aux comparaisons
          {
             if($login == $nomUsage) // On compare nos deux "nom_usage"
               {
                  // Si elles correspondent on active le compte !
                  echo "Votre compte a bien été activé !";

                  // Création token :
                  $token = md5(microtime(TRUE)*100000);

                  // La requête qui va passer notre champ actif de 0 à 1
                  $stmt = $this->getBdd()->prepare("UPDATE table1 SET actif = 1,token = :token WHERE cle = :cle");
                  $stmt->bindParam(':cle', $cle);
                  $stmt->bindParam(':token', $token);
                  $stmt->execute();

                  // $stm = $this->getBdd()->prepare("SELECT id_user FROM table1 WHERE token = :token");
                  // $stm->bindParam(':token', $token);
                  // $stm->execute();
                  // $idUser = $stm->fetch(PDO::FETCH_ASSOC);

                  // Id et token serviront au status connecté
                  $_SESSION['id_user'] = $iduser;
                  $_SESSION['token'] = $token;

               }
             else // Si les deux clés sont différentes on provoque une erreur...
               {
                  echo "Erreur ! Votre compte ne peut être activé et va s'autodétruire dans 10 secondes...";
               }
          }

          header( "refresh:5;url=./index.php?action=connection");

      }

  }

?>
