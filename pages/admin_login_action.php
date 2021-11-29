<?php
    include "connect.php";
    /* Avoid multiple sessions warning
    Check if session is set before starting a new one. */
    if(!isset($_SESSION)) {
        session_start();
    }

    $uname = mysqli_real_escape_string($conn, $_POST["admin_uname"]);
    $pwd = mysqli_real_escape_string($conn, $_POST["admin_psw"]);

    $sql0 =  "SELECT * FROM admin WHERE Username='".$uname."' AND Password='".$pwd."'";
    $result = $conn->query($sql0);

    if (($result->num_rows) > 0) {
        $_SESSION['isAdminValid'] = true;
        $_SESSION['LAST_ACTIVITY'] = time();
        header("location:adminhome.html");
    }
    else {
        session_destroy();
        die(header("location:adminlogin.php?loginFailed=true"));
    }
?>
