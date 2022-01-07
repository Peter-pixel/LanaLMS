<?php 
    include "connect.php";
    include "learnermenubar.php";
    if(!isset($_SESSION)) {
      session_start();
  }
  
?>
<!DOCTYPE html>

<html>
<head>
<title>Lana | Pages | assessment</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">
</div>

<div class="wrapper row2">
  <div id="breadcrumb"> 
  
    <ul>
      <li><a href="learnerhome.php">Home</a></li>
      <li><a href="#">Assessment</a></li>
    </ul>
   
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
   
    <div class="sidebar one_quarter first"> 
      
      <h6></h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="learnerhome.php">Dashboard</a></li>
          <li><a href="learnerprofile.php">Profile</a></li>
          <li><a href="assessment_learner.php">Assessment</a></li>
          <li><a href="chat.php">Chat</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
       
      </div> 
    </div>
    <div id="content" class="three_quarter"> 
      <div class="center push80">
      <div class="center push30">
        <h1 class="shout">Assessments</h1>
    </div>
    <div style="height:300px;width:750px;overflow:auto;background-color:green;color:black;scrollbar-base-color:blue;font-family:sans-serif;padding:10px;">
      <table width="80%" border="1">
    <tr>
    <td>File Name</td>
    <td>Unit</td>
    <td>Due Date</td>
    <td>View</td>
    
    </tr>
    <?php
 $sql="SELECT * FROM assessment";
 $result_set=$conn->query($sql);
 while($row = $result_set->fetch_assoc())
 {
  ?>
        <tr>
        <td><?php echo $row['file'] ?></td>
        <td><?php echo $row['unit'] ?></td>
        <td><?php echo $row['duedate'] ?></td>
        <td><a href="../uploads/<?php echo $row['file'] ?>" target="_blank">view file</a></td>
        </tr>
        <?php
 }
 ?>
</table>
</div>
    </div>
    <h1>Submit assessment</h1>
            <form action="submitassessment_action.php" method="post" enctype="multipart/form-data">
<input type="file" name="file" /><br>
<label for="unit"><b>Name</b></label>
<input type="text" placeholder="Your name" name="learner" required><br>
<label for="unit"><b>Unit</b></label>
<input type="text" placeholder="unit" name="unit" required><br>
<button type="submit" name="btn-upload"style=" background-color: #04aa36; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 30%;">Submit</button><br>

</form> <br>
</div>
    <div class="clear"></div>
  </main>
</div>

<div class="wrapper row4">
  <footer id="footer" class="clear"> 
    
    <div class="one_half first">
      <h6 class="title">The future is now</h6>
      <img class="imgl pad5 borderedbox" style="height: 100px; width: 100px;" src="../images/demo/gallery/student.png" alt="Student">
      <p>A journey of  thousand miles starts with one step. Lana will revolutionalize e-learning and bring
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
      <h6 class="title">Subscribe to our newsletter</h6>
      <p>Get updates on any changes that are made on this platform realtime.</p>
      <form action="#" method="post">
        <label for="nlt_email">Mail <span>*</span></label>
        <input class="push15" type="text" name="nlt_email" id="nlt_email" value="" size="22">
        <button class="badge bold uppercase" type="submit" value="Subscribe">Subscribe <i class="icon-chevron-right"></i></button>
      </form>
    </div>
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
  </div>
</div>
</body>
</html>