<?php /**
 *
 */
 include_once 'model/checkmailmodel.php';
include_once 'allfunction.php';


class Checkmail extends Allfunction
{
  private $info;
  private $mail;


  public function __construct()
  {
      $this->info = $_POST;
      $this->mail = $this->info["mail"];
    }

  public function checkMail(){
      $obj = new checkmailmodel();
      $rep = $obj->getmail($this->mail);
      return $rep;

  }
}
 ?>
