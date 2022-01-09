<?php
    include "connect.php";
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    $username = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["psw"]);

    $sql0 =  "SELECT * FROM instructor WHERE Name='".$username."' AND EmployeeNo='".$password."'";
    $result = $conn->query($sql0);

    if (($result->num_rows) > 0) {
        $_SESSION['loggedIn_InstructorId'] = $row["InstructorId"];
        $_SESSION['isInstructorValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:instructorhome.php");
    }
    else {
        session_destroy();
        die(header("location:instructorlogin.php?loginFailed=true"));
    }
?>
