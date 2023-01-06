<?php

Class Controller{
  public function view($view, $data = []){

    $pathTobeChecked = "../App/Views/". $view . ".php";
		if(file_exists($pathTobeChecked)){

			include $pathTobeChecked;
		}
	}

  public function loadModel($model){
    $modelToBeChecked = "../App/Models/". strtolower($model) . ".php";
    if(file_exists($modelToBeChecked)){

      include $modelToBeChecked;
      return $model = new $model();
    }
  }

}
