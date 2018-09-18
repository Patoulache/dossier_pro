<?php
require_once "model/setupDossierProModel.php";
/**
 *
 */
class setupDossierControl
{
   // private $labasededonnee;

  public function __construct()
  {
    // $this->$labasededonnee = new setupDossierModel();
  }
   public function getUserPersonnalInfos(){
    $labasededonnee = new setupDossierModel();
    // $lesinfosperso = $this->$labasededonnee->getUserCredential();
    $lesinfosperso = $labasededonnee->getUserCredential();
    return $lesinfosperso;
  }
}
 ?>
