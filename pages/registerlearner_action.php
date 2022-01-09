<?php
    include "connect.php";
    ?>
    
    <?php

            $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $tel = mysqli_real_escape_string($conn, $_POST["Tel"]);
            $regno = mysqli_real_escape_string($conn, $_POST["RegNo"]);
            $course = mysqli_real_escape_string($conn, $_POST["course"]);


            $sql0 = "INSERT INTO learner (Name, Email, TelephoneNo, RegistrationNo, Course)
            VALUES('$name', '$email', '$tel', '$regno', '$course')"; ?>

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