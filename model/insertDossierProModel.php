<?php

require_once "bdd.php";

class insertDossierProModel extends Bdd {

    public function rmrf() {
        $sql = $this->getBdd()->prepare("DELETE FROM table6 WHERE id_user = :id");
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();

        $sql = $this->getBdd()->prepare("DELETE FROM table5 WHERE id_user = :id");
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();

        $sql = $this->getBdd()->prepare("DELETE FROM table7 WHERE id_user = :id");
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();

        $sql = $this->getBdd()->prepare("DELETE FROM table8 WHERE id_user = :id");
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();

        $sql = $this->getBdd()->prepare("DELETE FROM table9 WHERE id_user = :id");
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();
    }

    public function insertT1($table1) {
        $sql = $this->getBdd()->prepare("UPDATE table1 SET nom_naissance = :nom_naiss, adresse = :adresse WHERE id_user = :id");
        $sql->bindParam(':nom_naiss', $table1[0]);
        $sql->bindParam(':adresse', $table1[1]);
        $sql->bindParam(':id', $_SESSION['id_user']);
        $sql->execute();
    }

    public function insertT5($table5) {
        if (!empty($table5)) {
            $sql = $this->getBdd()->prepare("INSERT INTO table5(activite_type, exemple, question1, question2, question3, question4, question5, id_user) VALUES (:act, :ex, :q1, :q2, :q3, :q4, :q5, :id)");
            $sql->bindParam(':act', $table5[0]);
            $sql->bindParam(':ex', $table5[1]);
            $sql->bindParam(':q1', $table5[2]);
            $sql->bindParam(':q2', $table5[3]);
            $sql->bindParam(':q3', $table5[4]);
            $sql->bindParam(':q4', $table5[5]);
            $sql->bindParam(':q5', $table5[6]);
            $sql->bindParam(':id', $_SESSION['id_user']);
            $sql->execute();
        }
    }

    public function insertT6($q4, $table6) {
        if (!empty($q4)){
            $sql = $this->getBdd()->prepare("INSERT INTO table6(question4, chant_at_serv, date_debut, date_fin, id_user) VALUES (:q4, :chant, :debut, :fin, :id)");
            $sql->bindParam(':q4', $q4);
            $sql->bindParam(':chant', $table6[0]);
            $sql->bindParam(':debut', $table6[1]);
            $sql->bindParam(':fin', $table6[2]);
            $sql->bindParam(':id', $_SESSION['id_user']);
            $sql->execute();
        }
    }

    public function insertT7($table7) {
        if (!empty($table7)) {
            $sql = $this->getBdd()->prepare("INSERT INTO table7(`diplome`, `organisme`, `date`, `id_user`) VALUES (:dipl, :orga, :dat, :id)");
            $sql->bindParam(':dipl', $table7[0]);
            $sql->bindParam(':orga', $table7[1]);
            $sql->bindParam(':dat', $table7[2]);
            $sql->bindParam(':id', $_SESSION['id_user']);
            $sql->execute();
        }
    }

    public function insertT8($table8) {
        if ($table8[0] !== "") {
            $sql = $this->getBdd()->prepare("INSERT INTO table8(id_user, texte1) VALUES (:id, :texte)");
            $sql->bindParam(':id', $_SESSION['id_user']);
            $sql->bindParam(':texte', $table8[0]);
            $sql->execute();
        }
    }

    public function insertT9($table9) {
        if (!empty($table9)) {
            $sql = $this->getBdd()->prepare("INSERT INTO table9(id_user, texte2) VALUES (:id, :texte)");
            $sql->bindParam(':id', $_SESSION['id_user']);
            $sql->bindParam(':texte', $table9);
            $sql->execute();
        }
    }
}

?>