<?php

    //Connecting to database
    $servername = "localhost";  // 192.168.0.2 // google.cloud.sg
    $username = "root";
    $password = "";
    $dbname = "eventbrite_signup";

    //Database connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
        if ($conn->connect_error) 
    {

        die("Connection failed: " . $conn->connect_error);

    }else{
        echo "Connected successfully";
    }
    $email = $_POST["email"];
    $confirm_email = $_POST["email2"];
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $password = $_POST["password"];
    $btn = $_POST["btn"];

?>   
<!DOCTYPE html>
<html>

<head>
    <title>
        Process
    </title>
    <meta charset="utf-8">
    <meta name="viewpoint" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="signup2.css">
</head>

<body>
    <?php 
    if ($btn = "Signup")
    {
        //Build query
        $sql = "INSERT INTO `singup` (`id`, `cos_email`, `cos_confirm_email`, `cos_firstname`, `cos_lastname`, `cos_password`) 
        VALUES (NULL, '".$email."', '".$email2."', '".$firstName."', '".$lastName."', '".$password."');";
        if ($conn->query ($sql) === TRUE)
        {
            echo "<h1 style= 'color:white'>
            Registration is in progress...
            </h1>";
        }
        else 
        {
            die ("ERROR");
        }
    }
    else 
    {
        die("NOTHING");
    }

    ?>

    <div class="footer-container">
        <?php
            include 'php\footer.php';
        ?>
    </div>
</body>

</html>
<?php 
    $conn->close();
?>