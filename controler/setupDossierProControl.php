<?php
require_once "model/setupDossierProModel.php";
/**
 *
 */
class setupDossierControl
{
   private $labasededonnee;

  public function __construct()
  {
    $this->labasededonnee = new setupDossierModel();
  }
   public function getUserPersonnalInfos(){
    $lesinfosperso = $this->labasededonnee->getUserCredential();
    return $lesinfosperso;
  }
}
 ?>
