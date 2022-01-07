<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "connect.php";
    include "session_timeout.php";
    include "adminmenubar.php";

    $name = "";
    $email =""; 
    $password = "";

    $id = $_SESSION['loggedIn_AdminId'];

    $sql0 = "SELECT * FROM admin WHERE AdminId='$id'";

    $result0 = $conn->query($sql0);

    

    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) {
            $name = $row["Name"];
            $email = $row["Email"];
            $password = $row["Password"];
           
        }
    }
?>

   
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body id="top" style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">
<div class="wrapper row3">
        <div class="flex-container-form_header">
            <h1 id="form_header">Your details</h1>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Name : <label id="info_label"><?php echo $name ?></label></label>
            </div>
            <div class=container>
                <label>Email : <label id="info_label"><?php echo $email ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Password : <label id="info_label"><?php echo $password?></label></label>
            </div>
        </div>
       
        <div class="flex-container">
            <div class="container">
                <a href="instructorhome.php" class="button">Login</a>
            </div>
</div>


</body>
</html>
