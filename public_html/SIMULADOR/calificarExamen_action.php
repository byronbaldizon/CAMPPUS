<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="bienvenida_styles.css">

    <script src="https://use.fontawesome.com/9c3c031de3.js"></script>


    <link href="https://fonts.googleapis.com/css2?family=Anton&family=BenchNine:wght@700&family=Open+Sans+Condensed:wght@300&family=Wire+One&display=swap" rel="stylesheet"> 
    <script src="https://use.fontawesome.com/9c3c031de3.js"></script>

    <link href='https://fonts.googleapis.com/css?family=Eater' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Russo+One&display=swap" rel="stylesheet"> 
    <link href='https://fonts.googleapis.com/css?family=Audiowide' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Audiowide&display=swap" rel="stylesheet"> 
    <!--fontawesome-->
    <script src="https://kit.fontawesome.com/9cb08368a2.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 

    <style>
        body{
            margin:0;
            padding:0;
            background-color: black;
            background-image: url(images/arte/robot.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            background-color: rgba(0,0,0,0.2);
            border-radius: 15px;
        }
        h1,h4{
            font-weight: bold;
            color:yellow;
            text-align: center;
        }
        .card{
            padding:2%;
        }
        .card-body{
            color:orange;
            font-size: 16px;
        }
        p{
           
            text-align: justify;
            text-justify: inter-word
        }
    </style>
    <script>
        $(document).ready(function(){
            $(".btnIngresar").click(function(){
                window.location.href="examen.php";
            });
        });
        $(document).ready(function(){
            $(".btnRegresar").click(function(){
                window.location.href="/index.php";
            });
        });
    </script>
</head>

<body>
<!--FACEBOOK-->
<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v7.0&appId=1621465824735164" nonce="6108xyFL"></script>


<?php
        $opcion[1]=$_POST['opcion1'];
	$opcion[2]=$_POST['opcion2'];
	$opcion[3]=$_POST['opcion3'];
	$opcion[4]=$_POST['opcion4'];
	$opcion[5]=$_POST['opcion5'];
	/*
	echo $opcion[1]."<br>";
	echo $opcion[2]."<br>";
	echo $opcion[3]."<br>";
	echo $opcion[4]."<br>";
        echo $opcion[5]."<br>";
        */
       



        //$nombre = $_SESSION['nombre'];
   
    /*
    $servername = "localhost";
    $database = "simulador";
    $username = "root";
    $password = "";
    */

$servername = "localhost";
$database = "c1870122_laburo";
$username = "c1870122_laburo";
$password = "zi10pobuWE";

    // Create connection    
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Check connection
    if (!$conn) {
    	die("No se pudo conectar con la base de Datos: " . mysqli_connect_error());
    }                      

    $respuestasCorrectas=array(0,0,0,0,0);
    
    $numeroProblema=explode("-",$opcion[1])[2];
    $sql1="SELECT opcion_correcta FROM problemas WHERE id=$numeroProblema";
    $resultado1=mysqli_query($conn,$sql1);
    $respuesta1=mysqli_fetch_array($resultado1);
    $respuestasCorrectas[0]=$respuesta1[0];
    //echo "la respuesta correcta es: ".$respuesta1[0]."<br>";

    $numeroProblema=explode("-",$opcion[2])[2];
    $sql2="SELECT opcion_correcta FROM problemas WHERE id=$numeroProblema";
    $resultado2=mysqli_query($conn,$sql2);
    $respuesta2=mysqli_fetch_array($resultado2);
    $respuestasCorrectas[1]=$respuesta2[0];
    //echo "la respuesta correcta es: ".$respuesta2[0]."<br>";

    $numeroProblema=explode("-",$opcion[3])[2];
    $sql3="SELECT opcion_correcta FROM problemas WHERE id=$numeroProblema";
    $resultado3=mysqli_query($conn,$sql3);
    $respuesta3=mysqli_fetch_array($resultado3);
    $respuestasCorrectas[2]=$respuesta3[0];
    //echo "la respuesta correcta es: ".$respuesta3[0]."<br>";

    $numeroProblema=explode("-",$opcion[4])[2];
    $sql4="SELECT opcion_correcta FROM problemas WHERE id=$numeroProblema";
    $resultado4=mysqli_query($conn,$sql4);
    $respuesta4=mysqli_fetch_array($resultado4);
    $respuestasCorrectas[3]=$respuesta4[0];
    //echo "la respuesta correcta es: ".$respuesta4[0]."<br>";

    $numeroProblema=explode("-",$opcion[5])[2];
    $sql5="SELECT opcion_correcta FROM problemas WHERE id=$numeroProblema";
    $resultado5=mysqli_query($conn,$sql5);
    $respuesta5=mysqli_fetch_array($resultado5);
    $respuestasCorrectas[4]=$respuesta5[0];
    //echo "la respuesta correcta es: ".$respuesta5[0]."<br>";

    /*
    $numeroCorrectos=0;
    for($i=1;$i<=5;$i++){
    	$resCor=$respuestasCorrectas[$i-1];
    	//echo $resCor."<br />";
    	$resAlu=explode("-",$opcion[$i])[1];
    	//echo $resAlu."<br />";
    	
    	if($resAlu==$resCor){
    		echo "PROBLEMA "."$i: "."CORRECTO"."<br>";
    		$numeroCorrectos++;

    	}else{
    		echo "PROBLEMA "."$i: "."INCORRECTO"."<br>"; 
    	}
    }
    echo"________________________________"."<br>";
    echo "TU NOTA ES: ". $numeroCorrectos*2 ." "."SOBRE 10";
    */

//PRESENTACION RESULTADOS

$numeroCorrectos=0;
?>
<div class="row mt-4">
    <div class="col-sm-2"></div>
    <div class="col-sm-6">
          <p style="font-family:arial;font-size:30px;color:black">GRACIAS POR USAR</p>
          <center><p style="font-family:arial;font-size:70px;font-weight:bold;color:red">&omega;-SYM</p></center>  
    </div>
    <div class="col-sm-4"></div>  
</div>
<div class="row mt-4">
     <div class="col-1"></div>
     <div class="col-5 d-flex justify-content-center">
         <div class="card mt-4">
              <div class="card-title">
                   <center><h3>TUS RESULTADOS SON</h3></center>
              </div>
               <?php
                    for($i=1;$i<=5;$i++){
                         $resCor=$respuestasCorrectas[$i-1];
                   	     //echo $resCor."<br />";
                   	     $resAlu=explode("-",$opcion[$i])[1];
                   	     //echo $resAlu."<br />";
                  	     if($resAlu==$resCor){
                             echo "PROBLEMA "."$i: "."CORRECTO"."<br />";
                             $numeroCorrectos++;
                   	     }else{
                   		    echo "PROBLEMA "."$i: "."INCORRECTO"."<br>"; 
                   	     }
                   }
                   echo"________________________________"."<br>";
                   echo "TU NOTA ES: ". $numeroCorrectos*2 ." "."SOBRE 10";
               ?>
          </div>
       </div>
     <div class="col-6">
     </div>
</div>
<div class="container-fluid mt-4">
  <div class="row mt-4 mb-4">
       <div class="col-4 pt-4 d-flex justify-content-center">
            <a href="https://twitter.com/robertodelfos?ref_src=twsrc%5Etfw" class="twitter-follow-button" data-show-
            count="true">Follow @robertodelfos
            </a>
            <script async src="https://platform.twitter.com/widgets.js"charset="utf-8"></script>
      </div>
      <div class="col-4 pt-4"> 
           <div class="fb-like" data-href="http://www.mihogarmitrabajo.com/SIMULADOR/bienvenida.php" data-     
               width="200" data-layout="standard" data-action="like" data-size="large" data-share="true">
           </div>  
      </div>
      <div class="col-4"> 
           
      </div>
  </div>
</div> 
</body>
</html>