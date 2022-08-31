<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.evbstatic.com/s3-build/548393-rc2022-06-29_16.04-ea1b0bd/django/images/favicons/android-chrome-192x192.png">
    <script src="https://kit.fontawesome.com/0e1ed34929.js" crossorigin="anonymous"></script>
    <title>Account View Ticket</title>
    <link rel="stylesheet" href="../style/account.css">
    <link rel="stylesheet" href="../style/style.css">
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
//get email from url parameter
$e = $_GET['email'];
//SQL statment
$get_account = "SELECT * FROM user WHERE Email = '$e'";

$get_ticket_info = "SELECT * FROM ticket INNER JOIN `event` ON ticket.Event_ID = `event`.Event_ID WHERE Email = '$e' ";

//Execute SQL statment
$account = $conn->query($get_account);

$event = $conn->query($get_ticket_info);

$acc = mysqli_fetch_assoc($account);

$price = "";



?>

<body>
    <nav>
        <?php include '../php/header1.php' ?>
    </nav>
    <div class="container">
        <div class="block-ticket">
            <div class="account-info">
                <div class="user-profile">
                    <img style="border-radius: 50%; object-fit: cover; width: 150px; height: 150px" src="https://upload.wikimedia.org/wikipedia/en/f/ff/SuccessKid.jpg" alt="">
                </div>
                <div>
                    <h2>Account</h2>
                    <h3>Name : <span class="grey"> <?php echo $acc['Username'] ?></span></h3>
                    <h3>Email : <span class="grey"> <?php echo $acc['Email'] ?></span></h3>
                </div>
            </div>
            <h2>Your Tickets</h2>
            <?php
            while ($eve = mysqli_fetch_assoc($event)) {
                if ($eve['Price'] == 0) {
                    $price = "Free";
                } else {
                    $price = $eve['Price'] . "$";
                }
            ?>

                <div class="event-ticket" style="padding-top: 20px">
                    <div class="event-img">
                        <a href="../detail/event-detail.php?email=<?php echo $e ?>&id=<?php echo $eve['Event_ID'] ?>">
                            <img src="<?php echo $eve['Event_image'] ?>" alt="<?php echo $eve['Event_title'] ?>">
                        </a>
                    </div>
                    <div>
                        <a href="../detail/event-detail.php?email=<?php echo $e ?>&id=<?php echo $eve['Event_ID'] ?>" style="text-decoration: none;">
                            <h2><?php echo $eve['Event_title'] ?></h2>
                        </a>
                        <h3 class="orangered"><?php echo date("D, M j, Y", strtotime($eve['Event_date'])) . ' ' . date("h:i A", strtotime($eve['Event_time'])) ?></h3>
                        <h3 class="grey"><?php echo $eve['Location_status'] ?></h3>
                        <h3 class="grey"><?php echo $eve['Quantity'] ?></h3>
                        <h3 class="grey"><?php echo $price ?> </h3>
                    </div>
                </div>

            <?php
            }
            ?>
        </div>
    </div>
    <footer class=".footer">
        <?php include '../php/footer1.php' ?>
    </footer>
</body>

</html>