<?php /**
 *
 */
class Checkmail extends Allfunction
{
  private $info;
  private $mail;

  public function __construct()
  {
      $this->info = $this->FromJson($_POST);
      $this->mail = $this->info[]
    }
  }

  private function checkMail(){
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
  }
}
 ?>
