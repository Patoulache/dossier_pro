<?php
try {
  session_start();
} catch (\Exception $e) {

}

if ($_POST){

} else if($_GET){
  if ($_GET["action"] === "inscription"){
    include_once 'vue/inscription.php';
  }
} else {
  include_once 'vue/connection.php';
}

 ?>
