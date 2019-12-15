Add.php

<?php
$temp = $_GET['temp'];
$servername = "localhost";
$username = "id7024054_iotuser";
$password = "divyanshu123";
$dbname = "id7024054_iotdata";
// Create connection
$conn = new mysqli($servername, $username,$password, $dbname);
// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
$val = $_GET['temp'];
$sql = "INSERT INTO iottable (temp) VALUES ($val);";
if ($conn->query($sql) === TRUE) {
	echo "Temperature Saved Successfully!";
} else {
	echo "Error:" . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
