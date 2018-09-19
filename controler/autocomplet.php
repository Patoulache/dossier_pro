<?php

require_once 'model/autocompletModel.php';
require_once 'allfunction.php';

/**
 *
 */
class autocomplet extends Allfunction
{
  private $obj;
  private $tosend = [];
  function __construct()
  {
    $this->obj = new autoCompletModel();

  }
  function requestdonnees(){
    $mesdonnees = $this->obj->lesJobs();
    foreach ($mesdonnees as  $value) {
      array_push($this->tosend, $value["titre_pro_vise"]);
    }
    echo $this->ToJson($this->tosend);
  }
  function requestPratiquePro(){
    $lespratiques = $this->obj->pratiquePro();
    foreach ($lespratiques as $value) {
      array_push($this->tosend, $value["activite_type"]);
    }//end FOREACH
    echo $this->ToJson($this->tosend);
  }//end FUNCTION
}//end CLASS
 ?>
