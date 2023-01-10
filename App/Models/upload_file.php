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
      $arr['title'] = escape($POST['title']);
      $arr['date'] = date("Y-m-d H:i:s");
      $arr['userid'] = 1;
      $arr['image'] = $destination;
      $arr['views'] = 0;
      $arr['url_address'] = generateRandomString(60);

      $_db =  new Database();
      $query = "INSERT into images (title, userid, date, image, views, url_address) values (:title, :userid, :date, :image, :views, :url_address)";
      $_db->write($query, $arr);
      header("Location: ". ROOT . "photos");
      die;


    }

}
