<?php
session_start(); // lancement session pour récupérer les valeurs insérées dans la super globale
require_once "../model/insertDossierProModel.php";

class InsertDossierProControl {

    private $test;
    private $insere;
    
    public function __construct() { // lancement de toutes les insertions
        $this->test = json_decode($_POST['envoi']);
        $this->insere = new insertDossierProModel();
        $this->insere->rmrf();
        $this->insertTable1();
        $this->insertTable5();
        $this->insertTable6();
        $this->insertTable7();
        $this->insertTable8();
        $this->insertTable9();
    
    }

    private function insertTable1(){
        $this->insere->insertT1($this->test->table1);
    }
    private function insertTable5(){

        foreach ($this->test->table5 as $value) {
            $this->insere->insertT5($value);
        }
    }

    private function insertTable6(){
        for ($i=0; $i<count($this->test->table6); $i++) {
            $this->insere->insertT6($this->test->table5[$i][5],$this->test->table6[$i]);
        }
    }

    private function insertTable7(){
        foreach ($this->test->table7 as $value) {
            $this->insere->insertT7($value);
        }
    }

    private function insertTable8(){

        foreach ($this->test->table8 as $value) {
            $this->insere->insertT8($value);
        }
    }

    private function insertTable9(){

        $this->insere->insertT9($this->test->table9[0]);
    }
};

 $try = new InsertDossierProControl();

?>