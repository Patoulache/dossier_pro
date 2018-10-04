<?php /**
 *
 */
class Allfunction
{
  protected function ToJson($t){
    return json_encode($t);
  }
  protected function FromJson($t){
    return json_decode($t);
  }
}
 ?>
