<?php 
include("connect.php");
include("instructormenubar.php") ;
include "session_timeout.php";

?>
<!DOCTYPE html>

<html>
<head>
<title>Lana | instructorhome</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">

<div class="wrapper row2">
  <div id="breadcrumb"> 
  
    <ul>
      <li><a href="instructorhome.php">Home</a></li>
      <li><a href="#">Upload Resources</a></li>
    </ul>
   
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
   
    <div class="sidebar one_quarter first"> 
      
      <h6></h6>
      <nav class="sdb_holder">
      <ul>
        <li><a href="instructorhome.php">Dashboard</a></li>
          <li><a href="uploadresources.php">Upload Resources</a></li>
          <li><a href="createassessment.php">Create Assessment</a></li>
          <li><a href="instructorpostnews.php">Post News</a></li>
          <li><a href="chatinstructor.php">Chat</a></li>
        </ul>
      </nav>
  
    </div>
 
    <div id="content" class="two_third"> 
            <h1>Upload Resources</h1>
            <form action="uploadresources_action.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br>
<label for="unit"><b>Unit</b></label>
<input type="text" placeholder="unit" name="unit" required><br>
<button type="submit" name="btn-upload"style=" background-color: #04aa36; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 30%;">Upload</button><br>

</form> <br>

 </div>
 <div style="height:300px;width:1000px;overflow:auto;background-color:green;color:black;scrollbar-base-color:blue;font-family:sans-serif;padding:10px;">
<h1>Uploaded Resources</h1>
<table width="80%" border="1">
    <tr>
    <td><strong>File Name</strong></td>
    <td><strong>File Type</strong></td>
    <td><strong>File Size(KB)</strong></td>
    <td><strong>Unit</strong></td>
    <td><strong>View</strong></td>
    
    </tr>
    <?php
 $sql="SELECT * FROM resources";
 $result_set=$conn->query($sql);
 while($row = $result_set->fetch_assoc())
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['type'] ?></td>
        <td><?php echo $row['size'] ?></td>
        <td><?php echo $row['unit'] ?></td>
        <td><a href="../uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</div>
    <div class="clear"></div>
   
  </main>
  </div>


<div class="wrapper row4">
<footer id="footer" class="clear"> 
    
    <div class="one_half first">
      <h6 class="title">The future is now</h6>
      <img class="imgl pad5 borderedbox" style="height: 100px; width: 100px;" src="../images/demo/cool2.png" alt="Student">
      <p>A journey of  thousand miles starts with one step. <br>
        Lana will revolutionalize e-learning and bring
        you the best in this field yet.
      </p>
      
    </div>
    <div class="one_quarter">
      <h6 class="title">Contact us</h6>
      <address class="push30">
      Trend Ent<br>
      250, 90119<br>
      Matuu<br>
           </address>
      <ul class="nospace">
        <li class="push10"><i class="icon-time"></i> Mon. - Fri. 9:00am - 7:00pm</li>
        <li class="push10"><i class="icon-phone"></i> +254 797798449</li>
        <li><i class="icon-envelope-alt"></i> lanalms.com</li>
      </ul>
    </div>
    <div class="one_quarter">
      <h6 class="title">Find us on social media</h6>
      <ul class="faico clear" style=" list-style-type:none;" >
            <li><a class="faicon-facebook" href="https://www.facebook.com">Facebook</a></li>
            <li><a class="faicon-pinterest" href="https://www.pinterest.com">Pinterest</i></a></li>
            <li><a class="faicon-twitter" href="https://www.twitter.com">Twitter</i></a></li>
            <li><a class="faicon-linkedin" href="https://www.linkedin.com">LinkedIn</i></a></li>
            <li><a class="faicon-instagram" href="https://www.instagram.com">Instagram</i></a></li>
          
          </ul>
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
    <p class="fl_left">Copyright &copy; 2021 - All Rights Reserved - <a href="#">LanaLMS</a></p>
    
  </div>
</div>
</body>
</html>