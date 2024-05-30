 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cityhospital";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection


// sql to delete a record
$sql = "DELETE FROM bookings WHERE id='" . $_GET["id"] . "'";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();
?> 