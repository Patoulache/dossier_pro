<?php /**
 *
 */
class Allfunction
{

protected function __construct()
  {

  }
  protected function ToJson($text){
    return json_encode($text);
  }
  protected function FromJson($text){
    return json_decode($text);
  }
}
 ?>
