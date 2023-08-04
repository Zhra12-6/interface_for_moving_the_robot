<?php

$X = $_POST["D"];
echo"$X";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "directions";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO directions (ID, Direction)
VALUES ('', '$X')";

if ($conn->query($sql) === TRUE) {
  echo "successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>