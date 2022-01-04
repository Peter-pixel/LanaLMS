<?php include("connect.php") ?>
<!DOCTYPE html>

<html>
<head>
<title>Lana/register instructor</title>
<meta charset="utf-8">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

    
    
<style>
    /* Bordered form */
form {
  
}

/* Full-width inputs */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: #04aa36;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
  opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
  width: 10%;
  border-radius: 50%;
}

/* Add padding to containers */
.container {
  padding: 16px;
}

/* The "Forgot password" text */
span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
    display: block;
    float: none;
  }
  .cancelbtn {
    width: 100%;
  }
}
</style>



<div class="wrapper row3">
  <main id="container" class="clear"> 
     <div class="sidebar one_quarter first"> 
      
      <h6></h6>
      <nav class="sdb_holder">
        <ul>
          <li><a href="registerlearner.php">Resister Student</a></li>
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
 
    <div class="center push30">
        <h1 class="shout">Register Instructor</h1>
    </div>
    <form style=" border: 3px solid #f1f1f1;margin-left: 300px; width: 60%;"action="registerinstructor_action.php" method="post">
      
        <div class="container">
            <label for="name"><b>Name</b></label>
            <input type="text" placeholder="Name" name="Iname" required>
            <label for="email"><b>Email</b></label>
            <input type="text" placeholder="Email" name="Iemail" required>
            <label for="Tel"><b>Telephone No</b></label>
            <input type="text" placeholder="Telephone Number" name="ITel" required>
            <label for="EmployeeNo"><b>Employee No</b></label>
            <input type="text" placeholder="Employee Number" name="EmployeeNo" required>
            <label for="unit"><b>Unit</b></label>
            <input type="text" placeholder="Unit Name" name="unit" required>
      
          <button type="submit"style=" background-color: #04aa36; 
          color: white; padding: 14px 20px; margin: 8px 0; border: none; cursor: pointer; width: 100%;">Register</button>
          
        </div>
      
        <div class="container" style="background-color:#f1f1f1">
          <button type="button" class="cancelbtn">Cancel</button>
        </div>
      </form>
   
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
    
  </div>
</div>
</body>
</html>