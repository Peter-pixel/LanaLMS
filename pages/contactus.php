<?php
    include "connect.php";
    ?>
<!DOCTYPE html>

<html>
<head>
<title>Lana/contactus</title>
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
    
    <div style="display: inline-flex;"class="flex-container-background">
        <div class="flex-container-heading">
            <h1 id="contact">Contact Us</h1><br>
        </div>

        <div class="flex-container" style="border-bottom: 0;
                                           border-top-left-radius: 10px;
                                           border-top-right-radius: 10px;">
            <div class="flex-item">
                <h1 id="sub-contact" style="color:green;"><br><br> Headquarters</h1>
                <p id="sub-contact">
                    Trent Ent<br>
                    250, 90119 Matuu<br>
                    Juja
                </p>
            </div><br>
            <div class="flex-item">
                <h1 id="sub-contact" style="color:green;">General Contact</h1>
                <p id="sub-contact">
                    Phone: 0797798449<br>
                    Other: 0799--------<br>
                    Email: office@&#8203dolphinbank.com
                </p>
            </div>
        </div>

        <div class="flex-container" style="border-top: 0;
                                           border-bottom-left-radius: 10px;
                                           border-bottom-right-radius: 10px;
                                           margin-left: 200px;">
            <div class="flex-item">
                <h1 id="sub-contact"style="color:green;"><br><br>Customer Care (24x7)</h1>
                <p id="sub-contact">
                    Phone: 0797798449<br>
                    Email: lanalms@gmail.com
                </p>
            </div><br><br>
            <div class="flex-item">
                <h1 id="sub-contact" style="color:green;">Live Chat</h1>
                <p id="sub-contact">
                  Chat with our<br> 
                  other learners and instructors!<br>
                   On our forum<br> 
                </p>
            </div>
        </div>
    </div><br><br><br>
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127649.12285052417!2d37.01443630961061!3d-1.1353066519266586!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f4616a21d035d%3A0xd46c6efa3589f45f!2sJuja!5e0!3m2!1sen!2ske!4v1641242076009!5m2!1sen!2ske"
       width="980" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe><br><br>

    <div id="comments">    
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
      
