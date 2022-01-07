<?php
    include "session_timeout.php";
    include("connect.php");

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(1000,100000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
 $unit = $_POST['unit'];
 $duedate = $_POST['duedate'];
 $folder="../uploads/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO assessment(file, unit, duedate) VALUES('$file','$unit', '$duedate')";
 $conn->query($sql); 
 header("location:createassessment.php");
}
?>