<?php
session_start();

if($_GET){
  if (isset($_GET["action"])){

    switch ($_GET["action"]) {
      case 'inscription':
      include_once 'vue/inscription.php';
        break;

      case 'checkmail':
        include_once "controler/checkmail.php";
        $obj = new checkmail();
        $rep = $obj->checkMail();
        echo $rep;
        break;

      case 'connection':
        include_once "controler/connectionControl.php";
        $obj = new connection();
        $rep = $obj->askDataBase();
        break;

      case 'validation':
        include_once ("model/validation.php");
        $obj = new validationModel();
        $obj->valid();
        break;

      case 'setinscription':
        include_once "controler/inscriptionController.php";
        $obj = new inscription($_POST);
        $obj->addId();
        break;

      default:
        // code...
        break;
      }
  }

  } else {
    include_once 'vue/connection.php';
  }

 ?>
