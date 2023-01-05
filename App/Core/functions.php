<?php

function show($item){
  echo "<pre>";
  print_r($item);
  echo "</pre>";

}

function view($view, $data = []){
  $this->pathToCheck = "../App/Views/". $view . ".php";
  if(file_exists($this->pathToCheck))
  {
    include $this->pathToCheck;
  }

}
