<?php

Class Home extends Controller{

  public function index(){
      $this->view("_Layout/index");
  }
  public function test(){
    echo "XX";

  }

}
