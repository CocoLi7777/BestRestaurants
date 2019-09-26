
<?php
include_once 'includes/head.php';
include_once 'includes/nav.php';
?>

<div class="form-style-3">
<form id="addDataForm" class="addData" onsubmit="return validateForm()" onreset="return checkReset()" action="insertData.php" method="post" enctype="multipart/form-data">
<fieldset><legend>Basic info</legend>
<label for="field1">
  <span>Name <span class="required">*</span></span>
  <input type="text" class="input-field" name="res_name" id="res_name"/>
  <span id="nameError"></span>
</label>


<label for="field2">
  <span>Caption <span class="required">*</span></span>
  <input type="text" class="input-field" name="res_caption"/>
  <span id="captionError" class="required"></span>
</label>
<label for="field3"><span>Address <span class="required">*</span></span>
  <input type="text" class="input-field" name="res_address"/>
  <span id="addressError" class="required"></span>
</label>
<label for="field4"><span>Image <span class="required">*</span></span>
  <input type="file" class="input-field" name="res_image" />
  <span id="imageError" class="required"></span>
</label>
</fieldset>

<fieldset><legend>More</legend>
<label for="field6"><span>Description <span class="required">*</span></span>
  <textarea name="res_des" class="textarea-field"></textarea>
  <span id="descriptionError" class="required" class="addDataError"></span>
</label>
<label><span> </span>
  <input type="submit" value="Submit" />
  <input type="reset" value="Reset" id="resetform"/>
</label>
</fieldset>
</form>
</div>



<?php
include 'includes/footer.php';
?>
