<?php
            include("connect.php");

            $name = mysqli_real_escape_string($conn, $_POST["name"]);
            $email = mysqli_real_escape_string($conn, $_POST["email"]);
            $comment = mysqli_real_escape_string($conn, $_POST["comment"]);

            $sql0 = "INSERT INTO comments (Name, Email, Created, Comment)
            VALUES('$name','$email', NOW(),'$comment')";

             $sql1 = "INSERT INTO comment_body (content)
             VALUES('$comment')"; ?>


            <?php
            if (($conn->query($sql0) === TRUE) && ($conn->query($sql1) === TRUE)) { ?>
                <p id="info"><?php echo "Comment posted successfully !\n";?></p>
            <?php
            } else { ?>
                <p id="info"><?php
                echo "Server Error !<br>";
                echo "Error: " . $sql0 . "<br>" . $conn->error . "<br>"; 
                echo "Error: " . $sql1 . "<br>" . $conn->error . "<br>";?></p>
            <?php
            }
          

            $conn->close();
            ?>
              <div class="flex-item">
            <a href="aboutus.php" class="button">Back</a>
        </div>
