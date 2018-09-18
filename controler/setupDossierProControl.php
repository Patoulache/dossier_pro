<?php
require_once "model/setupDossierProModel.php";
/**
 *
 */
class setupDossierControl
{
  private $labasededonnee;

  function __construct()
  {
    $this->$labasededonnee = new setupDossierModel();
  }
  function getUserPersonnalInfos(){
    $lesinfosperso = $this->$labasededonnee->getUserCredential();
  }
}


 ?>
