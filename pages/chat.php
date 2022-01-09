<?php 
include("connect.php");
include "session_timeout.php";
include("learnermenubar.php"); 
?>
<!DOCTYPE html>

<html>
<head>
<title>Lana/chat</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">


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
      <img src="../images/demo/learn.png"style="width:100%; height: 100%;" alt="">
      </div> 
    </div>
    <div id="content" class="three_quarter"> 
    <div class="center push80">
      <h1 class="center"><strong>Get class links and talk to instructors and other learners here</strong></h1>
      
    </div>
    <iframe  style="margin-left: 10px;"src="https://deadsimplechat.com/Uu7FxbxbX" width="700px" height="500px">
        </div>
 
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