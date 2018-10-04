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
        array_push($act,$value[0]);
      }
      $this->lesInfos['activity'] = $act;
    }
  }

  private function LesQuestionsDesActivity(){
    $reponse = [];
    foreach ($this->lesInfos['activity'] as $activ) {
      $tem = [];
      $rep = $this->leModel->getExempleActivity($activ);
      foreach ($rep as $val) {
        array_push($tem, $val[0]);
      }
      array_push($reponse, $tem);
    }
    $this->lesInfos['exemples'] = $reponse;
  }
  private function infosActivity(){
    $reponse = [];
    for ($a=0; $a< count($this->lesInfos['exemples']);$a++){
      $tem = [];
      for ($b=0;$b<count($this->lesInfos['exemples'][$a]);$b++){
        $t = [];
        $rep = $this->leModel->getInfosActivity($this->lesInfos['exemples'][$a][$b]);
        for ($i=0;$i<count($rep[0]);$i++) {
          // var_dump($rep[0][$i]);
          array_push($t,$rep[0][$i]);
        }
        array_push($tem, $t);
      }
      array_push($reponse, $tem);
    }
    var_dump($reponse[0][0][0]);
    $this->lesInfos['infosactivity'] = $reponse;
  }


  public function getAllInfos(){
    $this->getUserPersonnalInfos();
    $this->getInfoTitrePro();
    $this->getActivity();
    $this->LesQuestionsDesActivity();
    $this->infosActivity();

    return $this->lesInfos;
  }
}
 ?>
