<?php
include_once 'Xmlbdd.php';
class Bdd
{
  protected $bdd = "";
  private $connectXml = "";
  private $valueXml = "";

  public function __construct()
  {
    $this->connectXml = new Xmlbdd();
    $this->valueXml = $this->connectXml->getValue();
  }

  protected function getBdd(){

    if ($this->bdd == null){
      $this->bdd = new PDO('mysql:host='.$this->valueXml['host'].';dbname='.$this->valueXml['db'].';charset=utf8', $this->valueXml['id'],$this->valueXml['pass']);
    }
    return $this->bdd;
  }

}
 ?>
