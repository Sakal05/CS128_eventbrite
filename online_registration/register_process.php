
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


//All the parameters after ? can be accessed using $_GET array
$id = $_GET['id'];
$e = $_GET['email'];
$quantity = $_POST['quantity'];
$total = $_POST['total_post'];
$btn = $_POST["btn"];

$ticket_val = "SELECT * FROM ticket WHERE Event_ID = $id";
$ticket = $conn->query($ticket_val);
$t = mysqli_fetch_assoc($ticket);

if ($t['Event_ID'] != $id) {
    if ($btn == "Send") {
        $sql = "INSERT INTO `ticket`(`Ticket_ID`, `Quantity`, `Email`, `Event_ID`, `Total`) VALUES (NULL, '" . $quantity . "', '" . $e . "', '" . $id . "', '" . $total . "')";
        //execute SQL statement
        $conn->query($sql);
    }
    echo '<script>alert("Register Successfully!")</script>';
    header("refresh:0.5; url=../account?email=$e ");
} else {
    echo '<script>alert("Event has already been registered")</script>';
    header("refresh:0.5; url=../account?email=$e ");
}


$conn->close();

?>
