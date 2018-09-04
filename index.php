<?php

session_start();

if($_GET){
  if ($_GET["action"] === "inscription"){
    include_once 'vue/inscription.php';
  }elseif ($_GET["action"] === "checkmail") {
    include_once "controler/checkmail.php";
    $obj = new checkmail();
    $rep = $obj->checkMail();
    var_dump($rep);
  }
} else {
  include_once 'vue/connection.php';
}

 ?>
