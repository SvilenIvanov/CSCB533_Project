<?php

Class Contact extends Controller{

  public function index(){
    $data['pageTitle'] = "Contact";
    $this->view("_Layout/contact", $data);
  }
}
