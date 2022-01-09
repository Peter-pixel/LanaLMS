<?php
    include "connect.php";
    include "session_timeout.php";
     include "adminmenubar.php";
    ?>
<!DOCTYPE html>

<html>
<head>
<title>Lana | Admin | Admin Home</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">

<div class="wrapper row2">
  <div id="breadcrumb"> 
   
    <ul>
      <li><a href="#">Admin Home</a></li>
    </ul>
  
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
   
    <div class="sidebar one_quarter first"> 
      
      <h6></h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="registerlearner.php">Register Student</a></li>
          <li><a href="registerinstructor.php">Register Instructor</a></li>
          <li><a href="createcourse.php">Create Course</a>
            <ul>
              <li><a href="registerunits.php">Register Units</a></li>
                            </li>
            </ul>
          </li>
          <li><a href="postnews.php">Post News</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
      <img  src="../images/demo/world1.png"style="width:100%; height: 100%;" alt="">
      </div> 
    </div>
 
    <div id="content" class="three_quarter"> 
      <h1 class="shout"> Welcome Admin</h1>
   <p style=" margin-left: 100px; font-size:18px; "> 
                From here you can manage all of core activities and users settings.<br>
                You can add/manage learners, instructors and other admin.<br>
                You can also post news on the website.<br>
                <br>Please keep in mind that with great power comes great responsibility.
                Therefore please do not misuse your admin control to create trouble.</p><br>
            <h1 style=" margin-left: 100px; color:green; ">Register a new adminstrator</h1><br>
            <form style=" margin-left: 100px; width: 60%;"action="registeradmin_action.php" method="post">
        <div class="container">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="name" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email" name="email" required>
            <label for="password"><b>Password</b></label>
            <input type="text" placeholder="Password" name="password" required>
            
      
          <button type="submit"style=" background-color: #04aa36; color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">Register</button>
          
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