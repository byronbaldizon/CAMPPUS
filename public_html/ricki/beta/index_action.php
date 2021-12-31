<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tienda";

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$cantidad=$_POST['cantidad'];
$costo=$_POST['costo'];
$factura=$_POST['numeroFac'];
$lote=$_POST['numeroLot'];

echo "HOLA";

$conn = mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO productos (NULL , nombre, codigo, cantidad,costo,factura,lote)
VALUES ('$nombre', '$codigo', '$cantidad','$costo','$factura','$lote')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>