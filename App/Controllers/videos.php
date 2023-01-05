<?php

Class Videos extends Controller{

  public function index(){
    $data['pageTitle'] = "Videos";
    $this->view("_Layout/videos", $data);
  }
}
