<?php

Class Controller{
  function view($view, $data = []){
    $this->pathToCheck = "../App/Views/". $view . ".php";
    if(file_exists($this->pathToCheck))
    {
      include $this->pathToCheck;
    }
  }

}
