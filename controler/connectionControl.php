<?php
 /*
 *
 *
 */
 include_once "model/connectionModel.php";

class Connection
{

  function __construct()
  {
    // code...
  }
  function askDataBase(){
    $obj = new ConnectionModel();
    if (!empty($_POST["email"]) && !empty($_POST["pass"])) {
      // code...
      if (password_verify(htmlspecialchars($_POST["pass"]),$obj->getHashPass(htmlspecialchars($_POST["email"])))){
       // TODO: la boucle
      }
    }// !empty()
  }
}
 ?>
