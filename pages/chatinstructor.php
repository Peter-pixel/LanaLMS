<?php 
include("connect.php");
include("instructormenubar.php"); 
?>
<!DOCTYPE html>

<html>
<head>
<title>Lana/chat</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">


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
      <div class="sdb_holder">
      <img src="../images/demo/learn.png"style="width:100%; height: 100%;" alt="">
      </div> 
    </div>
    <div id="content" class="three_quarter"> 
    <div class="center push80">
      <h1 class="center"><strong>Send class links and talk to your students here.</strong></h1>
      
    </div>
    <iframe  style="margin-left: 10px;"src="https://deadsimplechat.com/Uu7FxbxbX" width="700px" height="500px">
        </div>
 
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
    
  </div>
</div>
</body>
</html>