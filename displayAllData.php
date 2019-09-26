<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
require_once 'searchAllData.php';


?>

<table class="displayRestaurant">
<thead>
<tr>
    <th scope="col">NAME</th>
    <th scope="col">IMAGE</th>
    <th scope="col">ADDRESS</th>
    <th scope="col">CAPTION</th>
</tr>
</thead>
<tbody>

<?php
foreach($rows as $row){
  echo '<tr><td><a href="displayOneData.php?id='.$row['id'].'">'.$row['name'].'</a></td>';
  echo '<td><img src="'.$row['image'].'" width="50px" </td>';
  echo '<td>'.$row['address'].'</td>';
  echo '<td>'.$row['caption'].'</td></tr>';

}

  echo '</tbody></table>';

  $ul = $pagination->createPagination();
  echo $ul;

include 'includes/footer.php';

?>
