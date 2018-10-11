<?php
session_start();
// hello
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
        ($obj->askDataBase()) ? header('location: index.php?action=getpage') : header('location: index.php');
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

// ici on créer la page de rendu
      case 'getpage':
        include_once "controler/setupDossierProControl.php";
        $obj = new setupDossierControl();
        $lesinfos = $obj->getAllInfos();

        (empty($lesinfos['activity'])) ? require "vue/activity.php" : require "vue/gabarie_activity.php";

        include_once "vue/dossierPro.php";        
        break;

      case 'autocomplet':
        include_once "controler/autocomplet.php";
        $obj = new autocomplet();
        if (isset($_POST['titrevise'])){
          $obj->requestdonnees();
        }
        if (isset($_POST['pratiquepro'])) {
          $obj->requestPratiquePro();
        }
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
