<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "connect.php";
    include "session_timeout.php";
    include "learnermenubar.php";

    
?>

   
<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body style=" background-image:url(../images/demo/splash.png); background-size: 1400px; background-repeat: no-repeat;">
<div class="wrapper row3">
        <div class="flex-container-form_header">
            <h1 id="form_header">Your details</h1>
        </div>

        <?php 
        $id = $_SESSION['loggedIn_LearnerId'];

$sql0 = "SELECT * FROM learner WHERE LearnerId= '1'";

$result0 = $conn->query($sql0);

if ($result0->num_rows > 0) {
    // output data of each row
    while($row = $result0->fetch_assoc()) {
       
?>
        <div class="flex-container">
            <div class=container>
                <label>Name : <label id="info_label"><?php echo $row["Name"]; ?></label></label>
            </div>
            <div class=container>
                <label>Email : <label id="info_label"><?php echo $row["Email"]; ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Telephone Number : <label id="info_label"><?php echo $row["TelephoneNo"]; ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Registration Number : <label id="info_label"><?php echo $row["RegistrationNo"]; ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Course : <label id="info_label"><?php echo $row["Course"]; ?></label></label>
            </div>
        </div>
        <?php
    }
}
        ?>
        <div class="flex-container">
            <div class="container">
                <a href="learnerhome.php" class="button">Home</a>
            </div>
</div>


</body>
</html>
