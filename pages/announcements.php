<?php 
    include "connect.php";
    include "session_timeout.php";
    include "adminmenubar.php";

?>

<!DOCTYPE html>

<html>
<head>
<title>Lana/news</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link href="news_style.css" rel="stylesheet" type="text/css" media="all">
<link href="search.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body style="background-color: #0B1041;" id="top">
   
  </header>
</div>


<div class="wrapper row3">
  <main id="container" class="clear"> 
   
    <div class="center push80">
       <?php
            $sql0 = "SELECT id, title, created FROM news ORDER BY created DESC";
            $result = $conn->query($sql0);

            if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                $id = $row["id"];
                $sql1 = "SELECT body FROM news_body WHERE id=$id";
                $result1 = $conn->query($sql1); ?>

                <div class="flex-item">
                    <div class="flex-container-title">
                        <h1 id="title"><?php echo $row["title"] . "<br>"; ?></h1>
                    </div>
                    <div class="flex-container-title">
                        <p id="date"><?php echo "Date : " .
                            date("d/m/Y", strtotime($row["created"])); ?></p>
                    </div>
                    <div class="flex-container-body">
                        <p id="news_body"><?php while($row1 = $result1->fetch_assoc()) {
                            echo $row1["body"]; } ?></p>
                    </div>
                </div>

            <?php }
            } else {
                echo "No news available ! Please post some.";
            }
            $conn->close();
        ?>
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