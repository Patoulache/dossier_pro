<?php

session_start();

if ($_POST){

} else if($_GET){
  if ($_GET["action"] === "inscription"){
    include_once 'vue/inscription.php';
  }elseif ($_GET["action"] === "checkmail") {
    // code...
  }
} else {
  include_once 'vue/connection.php';
}

 ?>
