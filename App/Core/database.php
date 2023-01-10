<?php

Class Database{
  public function dbConnect(){
    try{
      $string = "mysql:host=". DB_HOST . ";dbname=" . DB_NAME . ";";
      return $db = new PDO($string, DB_USERNAME, DB_PASSWORD);
    }catch(PDOException $exception){
      die($exception->getMessage());

    }
  }
  public function read($query,$data = [])
	{
		$DB  = $this->dbConnect();
		$stm = $DB->prepare($query);
		if(count($data) > 0){
			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}
		if($check)
		{
			return $stm->fetchAll(PDO::FETCH_OBJ);
		}
		return false;
	}
	public function write($query,$data = [])
	{
		$DB  = $this->dbConnect();
		$stm = $DB->prepare($query);
		if(count($data) > 0){
			$check = $stm->execute($data);
		}else{
			$stm = $DB->query($query);
			$check = 0;
			if($stm){
				$check = 1;
			}
		}
		if($check)
		{
			return true;
		}
		return false;
	}
}
