<?php
    include "connect.php";
    ?>
<!DOCTYPE html>

<html>
<head>
<title>Lana/aboutus</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="clear"> 
   
    <div id="logo" class="fl_left">
      <h1><a href="../index.html">Lana</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
      <ul class="clear">
        <li class="active"><a href="../index.html">Home</a></li>
            <li><a href="news.php">News</a></li>
            <li><a href="aboutus.php">About us</a></li>
           <li><a href="contactus.php">Contact us</a></li>
      </ul>
    </nav>
   
  </header>
</div>

<div class="wrapper row2">
  <div id="breadcrumb"> 
  
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About us</a></li>
             </ul>
   
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
    
  <h1><strong>We are the future</strong></h1>
    <img class="imgr borderedbox pad5" style="width:40%; height: 60%;" src="../images/demo/elearning.jpg" alt=""><br>
    <p>Lana is here to make your life easier.
      Lana is a top notch learning manangement system with the best user experience 
      and very organized content for both learners and instructors.</p><br>
   
    <img class="imgl borderedbox pad5" src="../images/demo/6elearning.jpg"style="width:40%; height: 60%;" alt=""><br>
    <p>We are providing a dedicated communication channel for students and lecturers to
      help grow their interest to learn and teach. A forum for the students and instructors to colaborate
       and communicate important matters. <a href="#">Forum</a> Communication is key in any healthy learning environment.</p><br>
    
    <div id="comments">
      <h2><strong>What people think about us.</strong></h2>
      
   
      
      <h2>Write A Comment</h2>
      <form action="comment_action.php" method="post">
        <div class="one_third first">
          <label for="name">Name <span>*</span></label>
          <input type="text" name="name" id="name" value="" size="22">
        </div>
        <div class="one_third">
          <label for="email">Email <span>*</span></label>
          <input type="text" name="email" id="email" value="" size="22">
        </div>
        <div class="clear">
          <label for="comment">Your Comment</label>
          <textarea name="comment" id="comment" cols="25" rows="10"></textarea>
        </div>
        <div>
          <input name="submit" type="submit" value="Submit Form">
          &nbsp;
          <input name="reset" type="reset" value="Reset Form">
        </div>
      </form>
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
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Lana</a></p>
    
  </div>
</div>
</body>
</html>
      
