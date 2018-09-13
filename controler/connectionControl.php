<?php
 /*
 *
 *
 */
 include_once "model/connectionModel.php";

class Connection
{
  private $mail;
  private $pass;

  function __construct()
  {
    $this->pass = htmlspecialchars($_POST["pass"]);
    $this->mail = htmlspecialchars($_POST["email"]);
  }

  function askDataBase(){
    if (!empty($this->pass) && filter_var($this->mail, FILTER_VALIDATE_EMAIL)) {
    $obj = new ConnectionModel();
    // echo "mail is " .$this->mail;
      if (password_verify($this->pass,$obj->getHashPass($this->mail)['pass'])){
       echo "tout va bien mec ;)";
     }
    }// !empty()
  }
}
 ?>
