<?php

/**
 *
 */
class inscription
{
  private $donnes;

  public function __construct(array $arr)
  {
    $this->donnees = $arr;
  }

  private function hashPass(){
    return password_hash($donnees["pass"], PASSWORD_BCRYPT);
  }
}


 ?>
