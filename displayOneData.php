<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
require_once 'searchOneData.php';

echo '<div class="dataInfo">';
echo '<div class="dataName">';
echo $row['name'];
echo '</div>';

echo '<div class="dataCaption">';
echo $row['caption'];
echo '</div>';

echo '<div class="dataImage">';
echo "<img src='{$row['image']}' alt='{$row['caption']}'>";

echo '</div>';



echo '<div class="dataAddress">';
echo $row['address'];
echo '</div>';

echo '<div class="dataDescription">';
echo $row['description'];
echo '</div>';
echo '</div>';

include 'includes/footer.php';


?>
