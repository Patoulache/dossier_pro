<?php
// include_once 'Xmlbdd.php';
class Bdd
{
  protected $bdd = "";
/*   private $connectXml = "";
  private $valueXml = "";

  public function __construct()
  {
    $this->connectXml = new Xmlbdd();
    $this->valueXml = $this->connectXml->getValue();
  }
 */
  protected function getBdd(){

    if ($this->bdd == null){
      $this->bdd = new PDO('mysql:host=193.168.3.125;dbname=dossier_professionnel;charset=utf8', 'root','sqlcoda#2018!');
    }
    return $this->bdd;
  }

}
 ?>
