<?php
$calif=$_POST['rating'];
echo $calif;
/*
$servername = "c206.ferozo.com";
$username = "c2060226_alumnos";
$password = "BA94feluro";
$dbname = "c2060226_alumnos";
*/
        $servername = 'localhost';
	$username = 'c2060226_alumnos';
	$password = 'BA94feluro';
	$dbname = 'c2060226_alumnos';

	mysql_select_db($dbname);


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("ERROR DE CONEXION: " . $conn->connect_error);
}

$sql = "INSERT INTO estrellas (id,estrellas)
VALUES (NULL,$calif)";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>