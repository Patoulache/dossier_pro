<?php

class Bdd
{
  protected $bdd = "";

  public function __construct()
  {

  }

  protected function getBdd(){
    if ($this->bdd == null){
      $this->bdd = new PDO('mysql:host=192.168.3.125;dbname=dossier_professionnel;charset=utf8', 'root','sqlcoda#2018!');
    }
    return $this->bdd;
  }
}
 ?>
