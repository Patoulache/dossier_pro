<?php
require_once "model/setupDossierProModel.php";
/**
 *
 */
class setupDossierControl
{
   private $labasededonnee;
   private $titrePro;
   private $lesInfos;

  public function __construct()
  {
    $this->labasededonnee = new setupDossierModel();
  }
   private function getUserPersonnalInfos(){
    $lesinfosperso = $this->labasededonnee->getUserCredential();
    foreach ($lesinfosperso as $key => $value) {
      $this->lesInfos[$key] = $value;
    }
  }
  private function getInfoTitrePro(){
    $this->titrePro = $this->labasededonnee->getTitrePro();
    $this->lesInfos['titre_pro_vise'] = $this->titrePro['titre_pro_vise'];
  }
  private function getActivity(){
    if(isset($this->lesInfos['titre_pro_vise'])){
      $activity = $this->labasededonnee->getLesActivitys($this->lesInfos['titre_pro_vise']);
      $act = [];
      foreach ($activity as $value) {
        array_push($act,$value);
      }
      $this->lesInfos['activity'] = $act;
    }
  }

  public function getAllInfos(){
    $this->getUserPersonnalInfos();
    $this->getInfoTitrePro();
    $this->getActivity();
    var_dump($this->lesInfos);
    return $this->lesInfos;
  }
}
 ?>
