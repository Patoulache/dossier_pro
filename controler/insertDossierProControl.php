<?php
require_once "model/insertDossierProModel.php";

class InsertDossierControl {

    private $test;
    private $insere;
    
    public function __construct() {
        $this->test = json_decode($_POST['envoi']);
        var_dump($this->test);
        $this->insere = new insertDossierProModel();
    }

    private function insertTable1(){

        $this->insere->
    }

};

$test = new InsertDossierControl();

?>