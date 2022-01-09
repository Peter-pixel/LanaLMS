<?php
    include "connect.php";
    include "session_timeout.php";

    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['loggedIn_AdminId'])) {
        $sql0 = "SELECT * FROM admin WHERE AdminId=".$_SESSION['loggedIn_AdminId'];
        $result = $conn->query($sql0);
        $row = $result->fetch_assoc();
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="user_navbar_style.css">
    <link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
     <link href="search.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body id="top">

<div class="wrapper row1">
  <header id="header" class="clear"> 
  
    <div id="logo" class="fl_left">
      <h1><a href="adminhome.php">Lana</a></h1>
    </div>
    <nav id="mainav" class="fl_right">
        <ul class="clear">
     
          <li class="active"><a href="adminhome.php">Home</a></li>
              <li><a href="announcements.php">Announcements</a></li>
              <li><a href="forumadmin.php">Forum &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
              <li><a class="drop" href="#"><img alt="Profile" src="../images/demo/default-profile.png" style="width:40px;height:40px;"></a>
              <ul>
              <li><a id="logout" href="logout_action.php" onclick="return confirm('Are you sure?')">Logout</a></li>
                 <li><a id="profile" href="adminprofile.php">My Profile</a></li>

              </ul>
            
        </ul>
   
      
      </nav>

   
  </header>
</div>

</body>
</html>
