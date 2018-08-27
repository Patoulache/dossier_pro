<?php

if ($_POST["info"]){

  $infos = json_decode($_POST["info"]);


// je sais pas ce qu'il fait mettre dans le $_SESSION
  $infos["id_p"] = $_SESSION["id"];
  $obj = new Infos($infos);
}

//check if Nomnaissance, nomusage, prenom, adresse sont dans la base
if ($obj->getIdNom()){
    $obj->addEntry();
} else{
  $obj->setIdNom();
  $obj->addEntry();
}

 ?>
