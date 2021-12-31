<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$pass=$_POST['password'];
$fecha=date('y-m-d');


	
	$servername = "localhost";
	$database = "c2060226_alumnos";
	$username = "c2060226_alumnos";
	$password = "BA94feluro";
	

    /*
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "camppus";
	*/

	$conn = mysqli_connect($servername, $username, $password, $database);
	// Check connection
	if ($conn->connect_error) {
	die("No se pudo conectar con la base de datos: " . $conn->connect_error);
    }

    $sql1="SELECT * FROM alumnosSimulador WHERE nombre LIKE '$nombre'";
    $result1=mysqli_query($conn,$sql1);

    if(mysqli_num_rows($result1)>0){
    	usleep (5000);
    	header("Refresh:0; url=index.html");
    	die("USUARIO REGISTRADO");
    	
    }else{
    	$sql2="INSERT INTO alumnosSimulador (id,nombre,email,password,fecha) VALUES (NULL,'$nombre','$email','$pass','$fecha')";
    	$result2 = mysqli_query($conn,$sql2);
	}
    mysqli_close($conn);
    header("Refresh:0; url=index.html");
?>