<?php
require_once "model/setupDossierProModel.php";
/**
 *
 */
class setupDossierControl
{
   private $leModel;
   private $titrePro;
   private $lesInfos;

  public function __construct()
  {
    $this->leModel = new setupDossierModel();
  }
   private function getUserPersonnalInfos(){
    $lesinfosperso = $this->leModel->getUserCredential();
    foreach ($lesinfosperso as $key => $value) {
      $this->lesInfos[$key] = $value;
    }
  }
  private function getInfoTitrePro(){
    $this->titrePro = $this->leModel->getTitrePro();
    $this->lesInfos['titre_pro_vise'] = $this->titrePro['titre_pro_vise'];
  }
  private function getActivity(){
    if(isset($this->lesInfos['titre_pro_vise'])){
      $activity = $this->leModel->getLesActivitys($this->lesInfos['titre_pro_vise']);
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
    return $this->lesInfos;
  }
}
 ?>
