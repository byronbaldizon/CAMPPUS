<?php
	$nombre=$_POST['name'];
	$apellido=$_POST['surname'];
	$email=$_POST['email'];
	$whatsapp=$_POST['whatsapp'];
	$asunto=$_POST['subject'];
	$mensaje=$_POST['message'];
	$fecha=date('y-m-d');

/*
echo $nombre."<br />";
echo $apellido."<br />";
echo $email."<br />";
echo $whatsapp."<br />";
echo $asunto."<br />";
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

    $sql="INSERT INTO contacto(id,nombre, apellido,email,whatsapp,asunto,mensaje,fecha) VALUES (NULL,'$nombre','$apellido','$email','$whatsapp','$asunto','$mensaje','$fecha')";

    $result = $conn->query($sql);

    mysqli_close($conn);
    header("Refresh:0; url=index.html");
	
?>