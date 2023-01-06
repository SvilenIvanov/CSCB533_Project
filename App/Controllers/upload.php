<?php

Class Upload extends Controller{

  public function index(){
    /*$data['pageTitle'] = "Upload";
    $this->view("_Layout/index", $data);*/

  }

  public function image(){
    $data['pageTitle'] = "Upload Image";

    if(isset($_FILES['file'])){
      show($_FILES);

    }
    $this->view("_Layout/uploadImage", $data);

  }
  public function video(){
    $data['pageTitle'] = "Upload Video";
    $this->view("_Layout/uploadVideo", $data);

  }
}
