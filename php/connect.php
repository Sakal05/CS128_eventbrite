<?php

    //Connecting to database
    $servername = "localhost";  // 192.168.0.2 // google.cloud.sg
    $username = "root";
    $password = "";
    $dbname = "event_signup";

    //Database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
        if ($conn->connect_error) 
    {

        die("Connection failed: " . $conn->connect_error);

    }else{
        echo "Connected successfully";
    }
    $user_email = $_POST["email"];
    $user_confirm = $_POST["con_email"];
    $user_firstname = $_POST["fname"];
    $user_lastname = $_POST["lname"];
    $user_password = $_POST["password"];
    $btn = $_POST["btn"];

?>   
<!DOCTYPE html>
<html>

<head>
    <title>
        Confirm Access
    </title>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup2.css">
</head>

<body>
    <?php 
    if ($btn = "Create Account")
    {
         // STEP #2  Build SQL statement 
         $sql = "INSERT INTO `tbl_signup`(`user_id`, `user_email`, `user_confirm`, `user_firstname`, `user_lastname`, `user_password`) 
         VALUES (NULL,'".$user_email."','".$user_confirm."','".$user_firstname."','".$user_lastname."','".$user_password."')";
         echo $sql;
        //$conn->query($sql);
        if ($conn->query($sql) === TRUE) {  //Nothing error! Execute SQL successfully
            echo "New record created successfully";

        } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        }

    }
    else { // Without click

        die("Nothing..");
    }
    ?>
    
    <!--Footer-->
    <div class="footer-container">
        <?php
            include 'php\footer.php';
        ?>
    </div>
    <!--/Footer-->

</body>
</html>
<?php
    //Close connection
    $conn->close();
?>