<?php

require_once 'DaoMySQLi.class.php';
require_once 'config.php';

$id = $_GET['id'];

$mySQLi = DAOMySQLi::getSingletion($option);
$sql = "SELECT * FROM restaurant where id=".$id;
$row = $mySQLi->fetchOne($sql);

?>
