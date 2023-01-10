<?php

Class Database{
  public function dbConnect(){
    try{
      $string = "mysql:host=localhost;dbname=gallery_db;";
      return $db = new PDO($string, 'root', 'cW)~S6ra$TMi&1*kWER2s=sO~u>{]Nm:');
    }catch(PDOException $exception){
      die($exception->getMessage());

    }


  }
  public function read($query, $data = []){



  }
  public function write($query, $data = []){
    $DB = $this->dbConnect();
    $stm = $DB->prepare($query);
    if(count($data) > 0){
      $check = $stm -> execute($data);
    } else {
      $check = $stm -> query();
    }

    if($check){
      return true;
    }
    return false;
  }


}
