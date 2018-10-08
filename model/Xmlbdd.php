<?php


class Xmlbdd
{
  private $file = 'test.xml';
  // XML with all the config for Bdd
  private $filexml;
  private $index;
  private $site;
  private $connectinfos = ["id" => "",
                            "pass" => "",
                            "host" => "",
                            "db" => ""];

  public function __construct()
  {
    //get Dir name of the website    __DIR__  -> absolute path
    $this->filexml = simplexml_load_file($this->file);

    $this->site = explode("/",__DIR__)[count(explode("/",__DIR__))-2];
    $this->index = $this->getIndexSite($this->filexml, $this->site);
    $this->hydrateInfo();
  }

  //update value
  public function setValue($indice,$val){
    $this->filexml->server[$this->index]->$indice = $val;
    $this->saveToFile;
  }

  public function getValue(){
    return $this->connectinfos;
  }

  public function delValue(){
    if ($this->getIndexSite($this->filexml, $this->site)){
      unset($this->filexml->server[$this->index]);
      $this->saveToFile();
      $this->hydrateInfo();
    }
  }

  public function addValue($id,$pass,$host,$db){

    $config = $this->filexml->addChild('server');
    $config->addattribute('site', $this->site);
    $config->addChild('id',$id);
    $config->addChild('pass',$pass);
    $config->addChild('host',$host);
    $config->addChild('db',$db);
    $this->saveToFile();
  }

  // get index of required setup
  private function getIndexSite($xml,$site){
    for ($i=0; $i < count($xml); $i++){
      if ($xml->server[$i]['site'] == $site){
        return $i;
      }
    }
  }

  private function hydrateInfo(){
    foreach ($this->connectinfos as $key => $value) {
      $this->connectinfos[$key] = trim($this->filexml->server[$this->index]->$key);
    }
  }

  //save to $file
  private function saveToFile(){
    $this->filexml->asXml($this->file);
  }
}
?>
