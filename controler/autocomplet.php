<?php

require_once 'model/autocompletModel.php';
require_once 'allfunction.php';

/**
 *
 */
class autocomplet extends Allfunction
{

  function __construct()
  {

  }
  function requestdonnees(){
    $obj = new autoCompletModel();
    $mesdonnees = $obj->lesJobs();
    $tosend = [];
    foreach ($mesdonnees as  $value) {
      array_push($tosend, $value["titre_pro_vise"]);
    }
    echo $this->ToJson($tosend);
  }
}

 ?>
