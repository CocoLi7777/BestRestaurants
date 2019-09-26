<?php

final class DAOMySQLi {
  private $host;
  private $user;
  private $pass;
  private $db;
  private static $instance;
  private $mySQLi;

  private function __construct(array $option){
    $this->initOption($option);
    $this->initMySQLi();

  }
  private function initMySQLi(){

    $this->mySQLi = new MySQLi($this->host,$this->user,$this->pass,$this->db);
    if($this->mySQLi->connect_errno){
      die('The connection is unsuccessful. Pls find the error info: '.$this->mySQLi->connect_error);
    };

  }
  private function initOption(array $option){
    $this->host = isset($option['host'])?$option['host']:'';
    $this->user = isset($option['user'])?$option['user']:'';
    $this->pass = isset($option['pass'])?$option['pass']:'';
    $this->db= isset($option['db'])?$option['db']:'';

    if($this->host =='' || $this->user == '' || $this->db == ''){
      die('Please input the valid information of Database');
    }
  }

  //private function clone(){}

  public static function getSingletion(array $option){
    if(!self::$instance instanceof self){
      self::$instance = new self($option);
    }
      return self::$instance;

  }

  public function fetchAll($sql){
    $arr = array();
    $res=$this->mySQLi->query($sql);
    if($this->mySQLi->error){
      $this->logErrors($this->mySQLi->error,$sql);
      return false;
    }else{
      while($row=$res->fetch_assoc()){
        $arr[]=$row;
      }
      if(!empty($arr)){
        return $arr;
      }

    }
  }

  public function fetchOne($sql){
    $res = $this->mySQLi->query($sql);
    if($this->mySQLi->error){
      $this->logErrors($this->mySQLi->error,$sql);
      return false;
    }else{
      $row = $res->fetch_assoc();
      return $row;
    }
  }

  public function dmlQuery($sql){
    if($res=$this->mySQLi->query($sql)){
      return true;
    }else{
      $this->logErrors($this->mySQLi->error,$sql);
      return false;
    }
  }

  public function uploadImage($temp,$dest){
  if(move_uploaded_file($temp,$dest)){
    $res = "Image moved to the folder.";
  }else {
    $res = "Image not moved to the folder.";
  }
  return $res;
}

 public function logErrors($error,$sql){
   $message = '<p> Error:'.$error.'</p>';
   $message .= '<p> Query:'.$sql.'</p>';
   echo $message;
}

public function cleanUp($value){
  $value = trim(htmlentities($value));
  $value = $this->mySQLi->real_escape_string($value);
  return $value;
}

public function prepareQuery($sql,$name,$address,$description,$des,$caption){
  $stmt = $this->mySQLi->prepare($sql);
  $stmt->bind_param("sssss",$name,$address,$description,$des,$caption);
  $stmt->execute();
  if($stmt->affected_rows){
    return true;
  }else{
    return false;
  }
}

public function checkImages($error){
  switch ($error) {
    case 2:
      echo "The image you uploaded is too big";
      return false;

    case 4:
      echo "Please choose the image you want to upload";
      return false;

    case 0:
      return true;
  }
}



}

 ?>
