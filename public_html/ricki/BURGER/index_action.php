<?php
$calif=$_POST['rating'];
echo "El valor pasado es: ".$calif;
/*

$servername = "localhost";
$database = "c2060226_alumnos";
$username = "c2060226_alumnos";
$password = "BA94feluro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO estrellas (id,stars)
VALUES (NULL,$calif)";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>