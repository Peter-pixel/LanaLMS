<?php
      include "session_timeout.php";
      include("instructormenubar.php") 
?>
<!DOCTYPE html>
<html>
<head>
<title>Lana | Pages | postnews</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">

<div class="wrapper row2">
  <div id="breadcrumb"> 
  
    <ul>
      <li><a href="instructorhome.php">Home</a></li>
      <li><a href="#">News</a></li>
      
    </ul>
   
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
    
    
    <form class="news_form" action="post_news_action.php" method="post">
        <div class="flex-container">
            <div class=container>
                <label>News Headline :</label><br>
                <input name="headline" size="50" type="text" required />
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Details :</label><br>
                <textarea name="news_details" style="height: 200px; width: 60vw;" required /></textarea>
            </div>
        </div>

        <div class="flex-container">
            <div class="container">
                <button style=" background-color: #04aa36;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 50%;"type="submit">Submit</button>
            </div>

            <div class="container">
                <button style=" background-color: #04aa36;color: white;padding: 14px 20px;margin: 8px 0;border: none;cursor: pointer;width: 50%;"type="reset" class="reset" onclick="return confirmReset();">Reset</button>
            </div>
        </div>

    </form><br><br>

    <script>
    function confirmReset() {
        return confirm('Do you really want to reset?')
    }
    </script>
   </div>
   
       <div class="clear"></div>
  </main>

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