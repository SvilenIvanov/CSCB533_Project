<?php

Class About extends Controller{

  public function index(){
    $data['pageTitle'] = "About";
    $this->view("_Layout/about", $data);
  }
}
