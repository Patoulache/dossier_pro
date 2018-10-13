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
      $this->bdd = new PDO('mysql:host=localhost;dbname=dossier_professionnel;charset=utf8', 'root','coda2018');
    }
    return $this->bdd;
  }

}
 ?>
