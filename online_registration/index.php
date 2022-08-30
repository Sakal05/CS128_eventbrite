<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style/online_registration.css">
    <link rel="stylesheet" href="../style/style.css">
    <title>Online-register-form</title>
</head>

<?php
error_reporting(0);
//open database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventbrite_db";

// open connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// else {

//     echo "Connected successfully";
// }
$quantity = $_POST['quantity'];
//All the parameters after ? can be accessed using $_GET array
$id = $_GET['id'];
$e = $_GET['email'];
//Build quert SQL statement

$sql = "SELECT * from event WHERE Event_ID = $id"; //sqp to get event 


//execute SQL
$result = $conn->query($sql);

$row = mysqli_fetch_assoc($result);
?>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <div class="content">
        <div class="container1">
            <div class="register-text">
                <div class="center">
                    <h2>Title</h2>
                    <p class="grey">Time and Date</p>
                    <div class="event-info">
                        <div class="info">
                            <h3><b>Title</b></h3>
                            <h3>Price</h3>
                            <h3 class="grey">Date</h3>
                        </div>
                        <div>
                            <select id="amount" size="1">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                            </select>
                        </div>
                    </div>
                    <p>Power by <span class="orangered"><b>eventbrite</b></span></p>
                </div>
            </div>
            <div class="order-summary">
                <img src="https://img.evbuc.com/https%3A%2F%2Fcdn.evbuc.com%2Fimages%2F259490649%2F572555648333%2F1%2Foriginal.20220403-020557?w=720&auto=format%2Ccompress&q=75&sharp=10&rect=0%2C0%2C2160%2C1080&s=94c23f5b2d478a97a4c0bd28d77fa55e" alt="">
                <div class="total">
                    <h4>Order summary</h4>
                    <div class="amount">
                        <p>amount</p>
                        <p>1</p>
                    </div>
                    <div class="amount">
                        <p>price</p>
                        <p>$___</p>
                    </div>
                    <div class="amount total-price">
                        <h3>total</h3>
                        <h3>$____</h3>
                    </div>
                </div>
            </div>
        </div>
        <a class="register-button"><button class="white register">Register</button></a>
    </div>
    <footer class="footer">
        <?php include '../php/footer1.php' ?>
    </footer>
</body>

</html>