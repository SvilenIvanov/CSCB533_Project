<?php

Class Home extends Controller{

  public function index(){
    $data['pageTitle'] = "Home";
    $loadClass = $this->loadModel("Load_images");
    $data['images'] = $loadClass-> getImages();
    $this->view("_Layout/index", $data);
  }
}
