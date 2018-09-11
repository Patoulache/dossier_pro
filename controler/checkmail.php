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
      $this->mail = htmlspecialchars($this->info["mail"], ENT_QUOTES);
    }

  public function checkMail(){
    if (filter_var($this->mail, FILTER_VALIDATE_EMAIL)){
      $obj = new checkmailmodel();
      $rep = $obj->getmail($this->mail);
      return $rep;
    }
  }
}
 ?>
