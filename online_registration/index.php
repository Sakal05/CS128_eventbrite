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
    <div style="height: 87vh;">
        <nav>
            <?php include '../php/header1.php' ?>
        </nav>
        <div class="block">
            <div style="display: flex; ">
                <div style="width: 60%;">
                    <div class="head">
                        <p><?php echo $row['Event_title']; ?></p>

                        <small><?php echo date("D, F d, Y", strtotime($row['Event_date'])) . ' ' . date("h:i A", strtotime($row['Event_time'])); ?></small>

                        <div>
                            <form method="post" action="./online_registration">
                                <select name="quantity" id="amount" size="1">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                </select>
                            </form>
                            <div>
                                <h3 class=" left">General Admission</h3>
                                <h4 class="left"><?php echo $row['Price']; ?></h4>

                                <hr size="1" color="lightgray">
                            </div>
                        </div>
                        <div>
                            <p style="font-size: 15px;">Powered by eventbrite</p>
                        </div>
                    </div>
                </div>

                <div class="order-summary">
                    <div class="img">
                        <img src="<?php echo $row['Event_image']; ?>">
                    </div>
                    <div style="display: flex; ">
                        <div>
                            <h3 class="left">Order summary</h3>
                            <p class="left">1 x <?php echo $quantity?></p>
                            <h3 class="left">Total</h3>
                        </div>
                        <div>
                            <br>
                            <br>
                            <p class="left">0.00$</p>
                            <h3 class="left">0.00$</h3>
                        </div>
                    </div>
                    <form style="position:relative; margin: auto; ">
                        <input type="submit" id="submit" value="Register">
                    </form>
                </div>

            </div>
        </div>
    </div>
    </div>
    <footer class="footer">
        <?php include '../php/footer1.php' ?>
    </footer>
</body>

</html>