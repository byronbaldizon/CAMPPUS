<?php

$nombre=$_POST['nombre'];
$codigo=$_POST['codigo'];
$cantidad=$_POST['cantidad'];
$costo=$_POST['costo'];
$factura=$_POST['numeroFac'];
$lote=$_POST['numeroLot'];



	$servername = "localhost";
	$database = "c2060226_alumnos";
	$username = "c2060226_alumnos";
	$password = "BA94feluro";

	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
	die("No se pudo conectar con la base de datos: " . $conn->connect_error);
	}

	$sql="INSERT INTO productosRICKI(id,nombre,codigo,cantidad,costo,factura,lote) VALUES (NULL,'$nombre','$codigo','$cantidad','$costo','$factura','$lote')";

	$result=mysqli_query($conn,$sql);

	mysqli_close($conn);
        header("Refresh:0; url=index.html");    


?>