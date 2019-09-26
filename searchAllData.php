<?php

require_once 'DaoMySQLi.class.php';
require_once 'config.php';
require_once 'Pagination.class.php';

$mySQLi = DAOMySQLi::getSingletion($option);
//$sql = "SELECT * FROM restaurant";
//$rows = $mySQLi->fetchAll($sql);
$sql="SELECT count(*) AS total FROM restaurant";
$pagination = new Pagination();
$count=$mySQLi->fetchOne($sql);
$pagination->totalRecord = $count['total'];
$pagination->pageSize = 5;
$pagination->currentPage = isset($_GET['page'])?$_GET['page']:1;
$offset = ($pagination->currentPage -1) * $pagination->pageSize;
$limit = $pagination->pageSize;

$sql = "SELECT * FROM restaurant LIMIT $offset,$limit";
$rows = $mySQLi->fetchAll($sql);





?>
