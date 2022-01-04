<?php
            include("connect.php");

            $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $comment = mysqli_real_escape_string($conn, $_POST["comment"]);

            $sql0 = "INSERT INTO comments (Name, Email, Created, Comment)
            VALUES('$name','$email', '$comment', NOW())";?>


            <?php
            if ($conn->query($sql0) === TRUE) { ?>
                <p id="info"><?php echo "Comment posted successfully !\n"; ?></p>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Server Error !<br>";
                echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"; ?></p>
            <?php
            }

            $conn->close();
            ?>