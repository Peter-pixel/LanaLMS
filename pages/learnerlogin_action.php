<?php
    include "connect.php";
    
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    $username = mysqli_real_escape_string($conn, $_POST["name"]);
    $password = mysqli_real_escape_string($conn, $_POST["psw"]);

    $sql0 =  "SELECT * FROM learner WHERE Name='".$username."' AND RegistrationNo='".$password."'";
    $result = $conn->query($sql0);

     if (($result->num_rows) > 0) {
        $_SESSION['loggedIn_LearnerId'] = $row["LearnerId"];
        $_SESSION['isLearnerValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:learnerhome.php");
    }
    else {
        session_destroy();
        die(header("location:learnerlogin.php?loginFailed=true"));
    }
?>
