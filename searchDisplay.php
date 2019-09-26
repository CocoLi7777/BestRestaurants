<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
require_once 'DaoMySQLi.class.php';
require_once 'config.php';

$name = $_GET['searchRes'];
if(!$name){
  echo '<div class="bridge2">';
  echo 'You must include at least one keyword to match in the content.';
  echo '</div>';
  exit;
}

$mySQLi = DAOMySQLi::getSingletion($option);
$sql = "SELECT * FROM restaurant where name='".$name."'";
$row = $mySQLi->fetchOne($sql);
$id = $row['id'];

if($row){
  echo '<div class="bridge1">';
  echo '<p>SEARCH RESULTS</p>';
  echo '<br><br>';
  echo '<a href="displayOneData.php?id='.$id.'">'.$name.'</a>';
  echo '</div>';
}else{
  echo '<div class="bridge2">';
  echo '<p>Your search yielded NO results</p>';
  echo '</div>';
}

include 'includes/footer.php';



 ?>
