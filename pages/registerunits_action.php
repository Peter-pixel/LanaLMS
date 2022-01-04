<?php
    include "connect.php";
    include "session_timeout.php";
    
    ?>
    
    <?php

            $name = mysqli_real_escape_string($conn, $_POST["unit"]);
            $code = mysqli_real_escape_string($conn, $_POST["code"]);
            $instructor = mysqli_real_escape_string($conn, $_POST["instructor"]);
            $course = mysqli_real_escape_string($conn, $_POST["course"]);


            $sql0 = "INSERT INTO units (Name,Code,Instructor, Course )
            VALUES('$name', '$code', '$instructor','$course')"; ?>

            <?php
            if (($conn->query($sql0) === TRUE)) { ?>
                <p id="info"><?php echo "Registered Successfully!\n"; 
                header("location:adminhome.html");?></p>
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