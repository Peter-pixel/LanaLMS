<?php
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    include "menubar.php";
    include "connect.php";
    include "session_timeout.php";

    $id = $_SESSION['loggedIn_InstructorId'];

    $sql0 = "SELECT * FROM instructor WHERE InstructorId=".$id;

    $result0 = $conn->query($sql0);

    if ($result0->num_rows > 0) {
        // output data of each row
        while($row = $result0->fetch_assoc()) {
            $name = $row["Name"];
            $email = $row["Email"];
            $tel = $row["TelephoneNo"];
            $employeeno = $row["EmployeeNo"];
            $unit = $row["Unit"];
           
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="customer_add_style.css">
</head>

<body>
    <form class="add_customer_form" action="instructorprofile_action.php" method="post">
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
                <label>Telephone Number : <label id="info_label"><?php echo $tel ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Employee Number : <label id="info_label"><?php echo $employeeno ?></label></label>
            </div>
        </div>

        <div class="flex-container">
            <div class=container>
                <label>Unit : <label id="info_label"><?php echo $unit ?></label></label>
            </div>
        </div>
       
        <div class="flex-container">
            <div class="container">
                <a href="adminhome.php" class="button">Home</a>
            </div>
            <div class="container">
                <button type="submit">Update</button>
            </div>
            <div class="container">
                <a href="#" class="password-button">Change Password</a>
            </div>
        </div>

    </form>

</body>
</html>
