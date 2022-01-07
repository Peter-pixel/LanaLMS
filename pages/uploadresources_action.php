<?php
    include "session_timeout.php";
    include("connect.php");

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(10000,1000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $file_size = $_FILES['file']['size'];
 $file_type = $_FILES['file']['type'];
 $unit = $_POST['unit'];
 $folder="../uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO resources(file,type,size, unit) VALUES('$file','$file_type','$file_size','$unit')";
 $conn->query($sql); 
 header("location:uploadresources.php");
}
?>
