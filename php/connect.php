<?php
    $email = $_POST['email'];
    $confirm_email = $_POST['email2'];
    $firstName = $_POST['fname'];
    $lastName = $_POST['lname'];
    $password = $_POST['password'];

    //Database connection
    $conn = new mysqli('localhost','root','','$eventbrite_signup');

    // Check connection
    if ($conn-> connect_error)
    {
        die ('Connection Failed : '.$conn -> connect_error);
    }
    else 
    {
        echo "Connected Successfully";
    }
?>