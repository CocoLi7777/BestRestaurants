<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
require_once 'DaoMySQLi.class.php';
require_once 'config.php';

$name = $_POST['res_name'];
$caption = $_POST['res_caption'];
$address = $_POST['res_address'];
$des = 'images/'.$_FILES['res_image']['name'];
$image = $_FILES['res_image']['tmp_name'];
$description = $_POST['res_des'];
$error = $_FILES['res_image']['error'];

$mySQLi = DAOMySQLi::getSingletion($option);
$check_res=$mySQLi->checkImages($error);

if(!$check_res){
  echo '<div class="bridge2">';
  echo $error;
  echo '</div>';
  die;
}

if(!empty($name) && !empty($caption) && !empty($address) && !empty($description)){
  $sql = "insert into restaurant (name,address,description,image,caption) values (?,?,?,?,?)";
  if($mySQLi->prepareQuery($sql,$name,$address,$description,$des,$caption)){
    $uploadRes = $mySQLi->uploadImage($image,$des);
    echo '<div class="bridge2">';
    echo '<p>New record successfully inserted into the database.</p>';
    echo $uploadRes;
    echo '</div>';
  }else{
    echo '<div class="bridge2">';
    echo '<p>Record not inserted into the database.</p>';
    echo '</div>';
  }
}

?>
