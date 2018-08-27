<?php

class Bdd
{
  private $bdd = "";

  public function __construct()
  {

  }

  private function getBdd(){
    if ($this->bdd == null){
      $this->bdd = new PDO('mysql:host=localhost;dbname=dossier_pro;charset=utf8', 'root','sqlcoda#2018!');
    }
    return $this->bdd;
  }
}
 ?>
