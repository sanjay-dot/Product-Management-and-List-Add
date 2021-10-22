<?php

session_start();  

   $model =trim($_POST['model']);
   $name =trim($_POST['name']);
   $price =trim($_POST['price']);

   $Image = $_FILES['file'];
   $ImageName = $_FILES['file']['name'];
   $error =  $_FILES['file']['error'];

   $tempExt = explode('.',$ImageName);
   $fileExt = strtolower(end($tempExt));
   $isallow = array('jpg','jpeg','png');

  if(in_array($fileExt, $isallow)){
    if($error === 0){
        $path = '/var/www/html/Project/uploads/'; 
        $location = $path . $_FILES['file']['name']; 
        move_uploaded_file($_FILES['file']['tmp_name'], $location); 
    }

    if(isset($_SESSION["phone"]))
    {
      array_push($_SESSION['phone'],array("Model"=>$model, "Name"=>$name,"Price"=>$price,"filename"=>$ImageName));
    }
    else{
      $_SESSION['phone'] = array();
      array_push($_SESSION['phone'],array("Model"=>$model, "Name"=>$name,"Price"=>$price,"filename"=>$ImageName));

    }

      if(isset($_SESSION["phone"]))
      {
          // print_r($_SESSION["phone"]);
          echo json_encode($_SESSION["phone"]);  
      }
      else
      {
          echo"Fail";
      }
      
    }
    else{
      $error = 2;
      echo $error;
    }



   
?>  
 


