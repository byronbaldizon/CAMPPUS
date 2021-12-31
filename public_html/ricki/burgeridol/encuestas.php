<!DOCTYPE html>
<html>
<head>
  <title>CONSULTAR ACTION</title>
  <style type="text/css"></style>
  <link rel="stylesheet" type="text/css" href="styles.php">
</head>
<body>


<?php
//ACA ESTA EL ARCHIVO consultarAction.php original.
//AHORA ESTÁ DENTRO DEL BODY DE UN ARCHIVO HTML
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

?>


<h1 style="color:blue">Los resultados serían</h1>



<?php

$sql=mysqli_query($conn,"SELECT id,stars,respuesta,volver FROM estrellas INNER JOIN pregunta USING (id) INNER JOIN sino USING (id) ");

while ($fila=mysqli_fetch_array($sql)){
  ?><span><?php echo "id: ".$fila["id"]."  estrellas:  ".$fila["stars"]. "  respuesta:  ".$fila["respuesta"]  . "  volverías  ".($fila["volver"]?"SI":"NO") ."<br>" ?></span><?php
}


$conn->close();

//ACA TERMINA EL ARCHIVO consultarAction.php

?>

</body>
</html>