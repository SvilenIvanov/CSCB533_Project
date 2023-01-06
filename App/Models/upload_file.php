<?php

Class Upload_file{
    public function upload($POST, $FILES){

      //$_SESSION['error'] = "";
      if($FILES['file']['name'] != "" && $FILES['file']['error'] == 0){

        $folder = "uploads/";
        if(!file_exists($folder)){
          mkdir($folder, 0777, true);
        }
        $destination = $folder . $FILES['file']['name'];
        move_uploaded_file($FILES['file']['tmp_name'], $destination);
      }
      /*$title = escape($POST['title']);
      $date = date("YYYY-mm-dd-HH-MM-s");
      $url_address = "";

      $_db =  new Database();
      $query = "INSERT into images () values ()";
      header("Location: ". ROOT . "photos");
      $_db->write();*/


    }

}
