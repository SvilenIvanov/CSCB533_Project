<?php

Class Load_images{

  public function getImages(){
    $DB = new Database();

    $query = "Select * from images order by id desc limit 12";
    return $DB->read($query);
  }

}
