function checkReset(){
  document.getElementById("addDataForm").reset();
  document.getElementById("res_name").focus();
  fresh();
}

function validateForm(){
   fresh();

   var name=document.forms["addDataForm"]["res_name"].value.trim();
   var caption=document.forms["addDataForm"]["res_caption"].value.trim();
   var address=document.forms["addDataForm"]["res_address"].value.trim();
   var image=document.forms["addDataForm"]["res_image"].value;
   var description=document.forms["addDataForm"]["res_des"].value.trim();


   var isValid;
   var arrInfo = [name,caption,address,image,description];

   for(var i=0;i<arrInfo.length;i++){
    if(arrInfo[i] == ""){
        isValid = false;
        break;
    }else{
        isValid = true;
    }
   }

   if(arrInfo[0] == ""){
       document.getElementById("nameError").innerHTML = "Name must not be blank";
    }
   if(arrInfo[1] == ""){
       document.getElementById('captionError').innerHTML = "Caption must not be blank";
   }
   if(arrInfo[2] == ""){
       document.getElementById('addressError').innerHTML = "Address must not be blank";
   }
   if(arrInfo[3] == ""){
       document.getElementById('imageError').innerHTML = "Pls upload the image";
   }
   if(arrInfo[4] == ""){
       document.getElementById('descriptionError').innerHTML = "Description must not be blank";
   }
   return isValid;
}

function fresh(){
  document.getElementById("nameError").innerHTML = "";
  document.getElementById('captionError').innerHTML = "";
  document.getElementById('imageError').innerHTML = "";
  document.getElementById('addressError').innerHTML = "";
  document.getElementById('descriptionError').innerHTML= "";
}
