<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
	<!--FAVICON-->
  	<link  rel="icon"   href="/img/iconoLechuza.ico" type="image/ico" />
  	<style>
  		body{
  			background:#4373D9;
  			color:white;
  		}
  		th,td{
  			text-align: center;
  		}
  	</style>	
</head>
<body>

		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
		  <a class="navbar-brand" href="#"><img class="img img-responsive "src="./img/iconoLechuza.ico" width="22%"></a>
		  <ul class="navbar-nav">
		    <li class="nav-item">
		      <a class="nav-link" href="#">Inscripciones</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="#">Consultas</a>
		    </li>
		  </ul>
		</nav>

	<div class="container" style="margin-top: 100px">
		<center><h1>CAMPPUS</h1></center>
		<center><h2>CENTRO DE GESTIÓN</h2></center>
	</div>
	<div class="container">	
		<h2>Inscripción clases gratuitas</h2>
		<p>Primer Cuatrimestre 2021</p>
		<div class="table-responsive">
			<table class="table table-bordered table-dark table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Email</th>
						<th>WhatsApp</th>
						<th>Materia</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>	
<?php


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
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, nombre,apellido,email,whatsapp,materia,fecha FROM gratuitas";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"] . "</td><td>"
. $row["apellido"]. "</td><td>" . $row["email"]. "</td><td>" . $row["whatsapp"]. "</td><td>" . $row["materia"]. "</td><td>".$row["fecha"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
//$conn->close();
?>
			</tbody>
	    </table>
	</div><!--TABLE-->

<br />
<br />
<?php
$sql2 = "SELECT email FROM gratuitas";
$res2=$conn->query($sql);
if($res2->num_rows>0){
while($row = $res2->fetch_assoc()){
	echo $row['email']."<br>";
	}	
}
?>


</div><!--CONTAINER-->
<div class="container">	
		<h2>Consultas</h2>
		<p>Primer Cuatrimestre 2021</p>
		<div class="table-responsive">
			<table class="table table-bordered table-dark table-hover">
				<thead>
					<tr>
						<th>Id</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Mensaje</th>
						<th>Fecha</th>
					</tr>
				</thead>
				<tbody>	
<?php

/*
$servername = "localhost";
$database = "c2060226_alumnos";
$username = "c2060226_alumnos";
$password = "BA94feluro";

$servername = "localhost";
$database = "camppus";
$username = "root";
$password = "";


$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
*/
$sql3 = "SELECT id, nombre,apellido,asunto,mensaje,fecha FROM contacto";
$result3 = $conn->query($sql3);
if ($result3->num_rows > 0) {
// output data of each row
while($row = $result3->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["nombre"] . "</td><td>"
. $row["apellido"]. "</td><td>".$row["mensaje"]."</td><td>".$row["fecha"]."</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
//$conn->close();
?>
			</tbody>
	    </table>
	</div><!--TABLE-->

<br />
<br />
<?php
$sql2 = "SELECT email FROM gratuitas";
$res2=$conn->query($sql);
if($res2->num_rows>0){
while($row = $res2->fetch_assoc()){
	echo $row['email']."<br>";
	}	
}
?>


</div><!--CONTAINER-->
</body>
</html>