<?php 
    include "connect.php";
    include "learnermenubar.php";
  
?>
<!DOCTYPE html>

<html>
<head>
<title>Lana | Pages | Full Width</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
</div>

<div class="wrapper row2">
  <div id="breadcrumb"> 
  
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Learner home</a></li>
    </ul>
   
  </div>
</div>

<div class="wrapper row3">
  <main id="container" class="clear"> 
   
    <div class="sidebar one_quarter first"> 
      
      <h6></h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="#">Dashboard</a></li>
          <li><a href="learnerprofile.php">Profile</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
        <h6>Author</h6>
        <address>
        Peter Mwanzia<br>
        P.O. Box 250<br>
        Matuu<br>
        90119<br>
        <br>
        Tel: +254 797798449<br>
        Email: <a href="#">lanalms@gmail.com</a>
        </address>
      </div> 
    </div>

      <div class="center push80">
       <?php
       $id = $_SESSION['loggedIn_LearnerId'];

    $sql0 = "SELECT Course FROM learner WHERE LearnerId= $id";
    $result = $conn->query($sql0);
    if ($result->num_rows > 0) {
    $coursename= $row["Course"] ?>}
     <?php
    }
$sql1 = "SELECT CourseId, Code FROM courses WHERE Name=$coursename"; 
            $result1 = $conn->query($sql1);
            if ($result1->num_rows > 0) {
            // output data of each row
           ?>

                <div class="flex-item">
                    <div class="flex-container-title">
                        <h1 id="name"><?php echo $row["Name"] . "<br>"; ?></h1>
                    </div>
                    <div class="flex-container-title">
                        <h1 id="code"><?php echo $row["Code"] . "<br>"; ?></h1>
                    </div>
                    <div class="flex-container-body">
                        <p id="news_body"><?php while($row1 = $result1->fetch_assoc()) {
                            echo $row1["body"]; } ?></p>
                    </div>
                </div>

            <?php }
            else {
                echo "No courses available.";
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

<div class="wrapper row5">
  <div id="copyright" class="clear"> 
    
    <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">Domain Name</a></p>
    
  </div>
</div>
</body>
</html>