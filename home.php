<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
include_once 'searchAllData.php';
?>
<div class="searchResrantant">
<form action="searchDisplay.php" method="get">
<input type="text" class="searchInput" name="searchRes" placeholder=" Search the restaurant...">
<input type="submit" value="SEARCH" class="searchSubmit">
</form>
</div>


<div id="frame">
  <ul id="demo">

   <li><a href="displayOneData.php?id=1"><img src="images/ishizuka.jpg"></a></li>
   <li><a href="displayOneData.php?id=2"><img src="images/sunda.jpg"></a></li>
   <li><a href="displayOneData.php?id=3"><img src="images/carlton.jpg"></a></li>
   <li><a href="displayOneData.php?id=4"><img src="images/tipo00.jpg"></a></li>
   <li><a href="displayOneData.php?id=5"><img src="images/osteria.jpg"></a></li>
   <li><a href="displayOneData.php?id=6"><img src="images/attica.jpg"></a></li>
 </ul>
</div>

<script type="text/javascript" src="slideshow.js"></script>;
<?php
include 'includes/footer.php';
?>
