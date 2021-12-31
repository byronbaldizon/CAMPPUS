<?php
header("Location: http://camppus.com.ar/ricki/BURGER/pagina4.html ");
$ans=$_POST['optradio'];
$servername = "c206.ferozo.com";
$username = "c2060226_alumnos";
$password = "BA94feluro";
$dbname = "c2060226_alumnos";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO sino (id,respuesta)
VALUES (NULL,$ans)";

if ($conn->query($sql) === TRUE) {

} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>