<?php

Class App{
  public function __construct(){
    $url = $this->splitURL();
    echo "<pre>";
    print_r($url);
    echo "</pre>";

  }

  private function splitURL()
	{
		$url = isset($_GET['url']) ? $_GET['url'] : "home";
		return explode("/", filter_var(trim($url,"/"),FILTER_SANITIZE_URL));
	}
}
