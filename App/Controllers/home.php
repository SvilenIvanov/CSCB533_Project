<?php

Class Home extends Controller{

  public function index(){
    $data['pageTitle'] = "Home";
    $this->view("_Layout/index", $data);
  }
}
