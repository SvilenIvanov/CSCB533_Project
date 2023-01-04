<?php

Class App{

  protected $controller = "home";
  protected $method = "index";
  protected $params = [];
  public function __construct(){
    $url = $this->splitURL();
    $inputExists = "../app/controllers/". strtolower($url[0]) . ".php";
    if (file_exists($inputExists)) {
      $this->controller = (strtolower($url[0]));
      unset($url[0]);

    }

    require $inputExists;
    $this->controller = new $this->controller;

    if(isset($url[1])){
      if(method_exists($this->controller, $url[1])){
        unset($url[1]);
      }
    }
    show($url);
  }

  private function splitURL()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
	}
}
