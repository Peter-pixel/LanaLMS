<?php
    include "connect.php";
    ?>
    
    <?php

            $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $password = mysqli_real_escape_string($conn, $_POST["password"]);


            $sql0 = "INSERT INTO admin (Username, Email, Password )
            VALUES('$name', '$email', '$password')"; ?>

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