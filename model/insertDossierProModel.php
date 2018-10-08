<?php

require_once "bdd.php";

class insertDossierProModel extends Bdd {

    public function insertT1($smth1, $smth2) {
        $sql = $this->getBdd()->prepare("INSERT INTO nom_naissance, adresse FROM table1 WHERE token = :token");
        $sql->bindParam(':token', $_SESSION['token']);
        $sql->execute();
    }
}

?>