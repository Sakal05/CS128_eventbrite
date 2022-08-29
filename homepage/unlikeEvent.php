<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "eventbrite_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$id = $_POST['id'];
$sql = "UPDATE event SET Like_status=0 WHERE Event_ID=" . $id;

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
echo $id ;
$conn->close();
?>