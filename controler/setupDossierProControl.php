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
      $tmp = [];
      $rep = $this->leModel->lesQuestions($activ);
      foreach ($rep as $value) {
        array_push($tmp, $value);
      }
      array_push($reponse, $tmp);
    }
    $this->lesInfos['lesQuestions'] = $reponse;
    var_dump($this->lesInfos['lesQuestions'][0][0]);
  }
  private function table7(){
    $reponse = [];
    $rep = $this->leModel->getTable7();
    foreach ($rep as $value) {
      $t = [$value['diplome'],$value['organisme'],$value['date']];
      array_push($reponse, $t);
    }
    $this->lesInfos['table7'] = $reponse;
  }
  private function table8(){
    $reponse = [];
    $rep = $this->leModel->getTable8();
    foreach ($rep as $value) {
      array_push($reponse, $value['texte1']);
    }
    $this->lesInfos['table8'] = $reponse;
  }

  private function table9(){
    $rep = $this->leModel->getTable9();
    $this->lesInfos['table9'] = $rep['texte2'];
  }


  public function getAllInfos(){
    $this->getUserPersonnalInfos();
    $this->getInfoTitrePro();
    $this->getActivity();
    $this->LesQuestionsDesActivity();
    $this->table7();
    $this->table8();
    $this->table9();
    return $this->lesInfos;
  }
}
 ?>
