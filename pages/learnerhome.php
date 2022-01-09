<?php 
    include "connect.php";
    include "session_timeout.php";
    include "learnermenubar.php";
    if(!isset($_SESSION)) {
      session_start();
  }

  
?>
<!DOCTYPE html>

<html>
<head>
<title>Lana | Pages | learnerhome</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">
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
          <li><a href="assessment_learner.php">Assessment</a></li>
          <li><a href="chat.php">Chat</a></li>
        </ul>
      </nav>
      <div class="sdb_holder">
       
      </div> 
    </div>
    <div id="content" class="three_quarter"> 
    <h1 class="shout"> Welcome Learner</h1>
   <p style=" margin-left: 100px; font-size:18px; "> 
               
                You can access resources and assessements from any unit from here.<br>
  
                <br>Please select your course below.</p><br>
      <div class="center push80">
      <form method="post">
  <select name = 'subject[]'>
    <option disabled selected>-- Select course and submit --</option>
    <?php  // Using database connection file here
        $records = mysqli_query($conn, "SELECT Name From courses");  // Use select query here 

        while($data = mysqli_fetch_array($records))
        {
            echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>";  // displaying data in option menu
        }	

        
    ?>  
  </select><br>
  <input style="background-color:green;width:20%; color:white;"type = 'submit' name = 'submit' value = Submit>
  <?php
     
    // Check if form is submitted successfully
    if(isset($_POST["submit"]))
    {
        // Check if any option is selected
        if(isset($_POST["subject"]))
        {
            // Retrieving each selected option
            foreach ($_POST['subject'] as $subject);
            $result = mysqli_query($conn, "SELECT * FROM units WHERE Course='$subject'");
            $units_array = array(); 
            if ($result->num_rows > 0) {
            // output data of each row
            while($row = mysqli_fetch_array($result)) {
              $units_array[] = "". $row['Name']."<br>";
            }
            $units_string = implode( $units_array);
            
          }
          
          
                ?>
             
             <br><h6 class="title"><?php echo" Course: $subject" ?></h6>
           
           <div class="center">
                <div class="pad30 borderedbox hovered" style="background-color: white;color: black; ">
                <h6 class="title"><?php echo " $subject units:"?></h6>
                    <p><?php echo $units_string;?></p>
                    <p class="nospace"><a class="badge uppercase" href="learnerresources.php">View resources <i class="icon-chevron-right"></i></a></p>
                </div>
            </div>
                 <?php
                
        }
    else
        echo "Select an option first !!";
    }
?>
</form>

<?php mysqli_close($conn);  // close connection ?>

    </div>
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