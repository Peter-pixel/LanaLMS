<?php 
    include "connect.php";
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
                <li><a href="contactus.php">Contact us &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
             <a class="badge uppercase" style="background-color: green;color: white;" href="login.html">LOGIN<i class="icon-chevron-right"></i></a>
          </ul><br>

    </nav>
   
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
    
  </footer>
</div>

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
  </div>
</div>
</body>
</html>