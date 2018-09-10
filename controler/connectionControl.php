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
    if (!empty($this->email) && !empty($this->pass)) {
    $obj = new ConnectionModel();
      if (password_verify($this->pass,$obj->getHashPass($this->email))){
       // TODO: la boucle
     }
    }// !empty()
  }
}
 ?>
