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
$price = "";
if ($row['Price'] == 0) {
    $price = "Free";
} else if ($row['Price'] > 0) {
    $price = $row['Price'] . "$";
}
?>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <form action="./register_process.php?email=<?php echo $e ?>&id=<?php echo $id ?>" method="post">
        <div class="content">
            <div class="container1">
                <div class="register-text">
                    <div class="center">
                        <h2> <?php echo $row['Event_title'] ?></h2>
                        <p class="grey"><?php echo date("D, M j, Y", strtotime($row['Event_date'])) . ' ' . date("h:i A", strtotime($row['Event_time'])) ?></p>
                        <div class="event-info">
                            <div class="info">
                                <h3"><b><?php echo $row['Event_title'] ?></b></h3>

                                    <h3><?php echo $price ?></h3>

                                    <h3 class="grey"><?php echo date("D, M j, Y", strtotime($row['Event_date'])) ?></h3>
                            </div>
                            <div>

                                <select id="amount" size="1" name="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>

                            </div>
                        </div>
                        <p>Power by <span class="orangered"><b>eventbrite</b></span></p>
                    </div>
                </div>
                <div class="order-summary">
                    <img style="height: 240px;" src="<?php echo $row['Event_image'] ?>" alt="">
                    <div class="total">
                        <h4>Order summary</h4>
                        <div class="amount">
                            <p>Amount</p>
                            <p> 1 </p>
                        </div>
                        <div class="amount">
                            <p>Price</p>

                            <p><?php echo $price ?></p>
                        </div>
                        <div class="amount total-price">
                            <h3>Total</h3>
                            <h3>20 $</h3>
                        </div>
                    </div>
                </div>
            </div>

            <a class="register-button"><button class="white register" name="btn" value="Send">Register</button></a>

        </div>
    </form>
    <footer class="footer">
        <?php include '../php/footer1.php' ?>
    </footer>
</body>

</html>