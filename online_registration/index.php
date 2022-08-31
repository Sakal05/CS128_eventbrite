<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

//get value from URL parameter
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

                        </div>
                        <p>Power by <span><b style="color: orangered">eventbrite</b></span></p>
                    </div>
                </div>
                <div class="order-summary">
                    <img style="height: 240px;" src="<?php echo $row['Event_image'] ?>" alt="">
                    <div class="total">
                        <h4>Order summary</h4>
                        <div class="amount" style="vertical-align: center;padding-top:12px">
                            <p>Amount</p>
                            <div>
                                <input type="number" name="quantity" id="amount" min="0" style="width: 40px;" />

                                <input type="hidden" name="h_price" id="h_price" value="<?php echo $row['Price'] ?>" />

                                <script>
                                    $("#amount").change(function() {
                                        var price = $("#h_price").val();
                                        var amount = $("#amount").val();
                                        var total = price * amount;
                                        document.getElementById("total").innerHTML = total + "$";

                                        document.getElementById("total1").value = price * amount;

                                    });
                                </script>
                                <input type="hidden" name="total_post" value="" id="total1" />

                            </div>
                        </div>
                        <div class="amount">
                            <p>Price</p>
                            <p><?php echo $price ?></p>
                        </div>
                        <div class="amount total-price">
                            <h3>Total</h3>
                            <h3 id="total">$</h3>
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

<?php
$conn->close();
?>