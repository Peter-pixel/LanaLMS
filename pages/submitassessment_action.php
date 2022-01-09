<?php
    include "session_timeout.php";
    include("connect.php");

if(isset($_POST['btn-upload']))
{    
     
 $file = rand(10000,1000000)."-".$_FILES['file']['name'];
    $file_loc = $_FILES['file']['tmp_name'];
    $learner = $_POST['learner'];
 $unit = $_POST['unit'];
 $folder="../submitedassessments/";
 
 move_uploaded_file($file_loc,$folder.$file);
 $sql="INSERT INTO submitassessment(learner,file, unit) VALUES('$learner','$file','$unit')";
 $conn->query($sql); 
 header("location:assessment_learner.php");
}
?>