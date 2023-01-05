<?php

Class Controller{
  public function view($view, $data = []){

    $pathTobeChecked = "../App/Views/". $view . ".php";
		if(file_exists($pathTobeChecked)){

			include $pathTobeChecked;
		}
	}

}
