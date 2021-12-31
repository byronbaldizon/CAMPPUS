<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ham";


 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


$sql=mysqli_query($conn,"SELECT id,stars,respuesta,volver FROM estrellas INNER JOIN pregunta USING (id) INNER JOIN sino USING (id) ");

while ($fila=mysqli_fetch_array($sql)){
  echo "id: ".$fila["id"]."  estrellas:  ".$fila["stars"]. "  respuesta:  ".$fila["respuesta"]  . "  volverías  ".($fila["volver"]?"SI":"NO") ."<br>";
}

$conn->close();



?>