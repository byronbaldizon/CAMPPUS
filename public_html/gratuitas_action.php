<?php

$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];
$whatsapp=$_POST['whatsapp'];
$materia=$_POST['materia'];
$fecha=date('y-m-d');
/*
echo $nombre;
echo $apellido;
echo $email;
echo $whatsapp;
echo $materia;
*/
	
	$servername = "localhost";
	$database = "c2060226_alumnos";
	$username = "c2060226_alumnos";
	$password = "BA94feluro";
	

    /*
	$servername = "localhost";
	$database = "camppus";
	$username = "root";
	$password = "";
	*/



	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
	die("No se pudo conectar con la base de datos: " . $conn->connect_error);
    }

    $sql="INSERT INTO gratuitas(id,nombre, apellido,email,whatsapp,materia,fecha) VALUES (NULL,'$nombre','$apellido','$email','$whatsapp','$materia','$fecha')";

    $result = $conn->query($sql);

    mysqli_close($conn);
    header('Location: index.html');
   die();


?>