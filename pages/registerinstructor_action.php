<?php
    include "connect.php";
    ?>
    
    <?php

            $name = mysqli_real_escape_string($conn, $_POST["Iname"]);
            $email = mysqli_real_escape_string($conn, $_POST["Iemail"]);
            $tel = mysqli_real_escape_string($conn, $_POST["ITel"]);
            $employeeno = mysqli_real_escape_string($conn, $_POST["EmployeeNo"]);
            $unit = mysqli_real_escape_string($conn, $_POST["unit"]);


            $sql0 = "INSERT INTO instructor (Name, Email, TelephoneNo, EmployeeNo, Unit)
            VALUES('$name', '$email', '$tel', '$employeeno', '$unit')"; ?>

            <?php
            if (($conn->query($sql0) === TRUE)) { ?>
                <p id="info"><?php echo "Registered Successfully!\n"; 
                header("location:adminhome.php");?></p>
    }
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Server Error !<br>";
                echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"?></p>
            <?php
            }

            $conn->close();
            ?>