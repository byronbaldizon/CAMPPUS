<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="image_test_styles.css">

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
            background-color:#282923;
         }
        .principal{
            border-width: 2/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////px;
            border-color: gray;
            border-style: solid;
            border-radius: 5px;
            

        }
        .enunciado{
            background-color: lightblue;
            border-radius: 10px;
        }

        .tarjetaIzquierda{
            background-color: lightgray;

        }

        .seleccione{
            color:gray;
        }

    </style>   
    <script type="text/javascript">
        $(document).ready(function(){
          $("#btn_salir").click(function(){
              window.location.href="/index.php";
          });
        });
    </script>

</head>
<body>
    <?php session_start();
        //$nombre=$_SESSION['nombre'];
    ?>




    <div class="container-fluid principal">
        <div class="row mt-4">
            <div class="col">
                 <center><img class="img-fluid" src="images/banners/BANNER_ROJO_NEGRO_1500X300.jpg" alt="banner"></center>  

                <!--<p>Bienvenido <?php echo $nombre ?></p>-->
            </div>
        </div>
        <div>
            
            ░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░░
        </div>
        <?php 
        $numeroDeProblemas=94; //construir rutina para averiguar el numero de problemas en la BDD
        $rangoDeProblemas=range(1,$numeroDeProblemas);
        $respuestasCorrectas=array(0,0,0,0,0);
        //Desordenamos el rango aleatoriamente
        shuffle($rangoDeProblemas);
        //tomamos los primeros 5 problemas del array rango aleatorizado
        for ($x = 1; $x <= 5; $x++) {
           //echo "PROBLEMA NUMERO: ". $rangoDeProblemas[$x]."<br>";
        ?>    
            <div class="row mt-4">
                <div class="col-md-2">
                    <div class="card tarjetaIzquierda">
                        <div class="card-body">
                            <h4><b>Pregunta <?php echo $x ?></b></h4>
                            <!--<p>Sin responder a&uacute;n</p>
                            <p>Punt&uacute;a como 1</p>
                            <p><i class="fa fa-flag"></i> Marcar pregunta</p>-->
                        </div> 
                    </div>
                </div><!--col-md-2-->
                <div class="col-md-8">
                    <div class="enunciado">
                        <p class="p-3">
                        <?php
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
                            /*
                            echo "Conexión exitosa <br />";
                            */
                            $sql="SELECT ruta_enunciado FROM problemas WHERE id='$rangoDeProblemas[$x]'";
                            $resultado1=mysqli_query($conn,$sql);
                            $ruta_archivo_texto=mysqli_fetch_array($resultado1);
                            $ruta_real=realpath($ruta_archivo_texto[0]);
                            /*
                            echo "RUTA REAL DE ARCHIVO: ".$ruta_real."<br>";
                            echo "RUTA DE ARCHIVO: ".$ruta_archivo_texto[0]."<br>";
                            */
                            $fp=fopen($ruta_real,"r");
                            $texto="";
                            while(!feof($fp)){
                                $texto=$texto.fgets($fp);
                            }
                            /*
                            echo "________________________"."<br>";
                            echo "EL TEXTO ES: "."<br>";
                            echo $texto."<br>";
                            echo "________________________"."<br>";
                            */
                            $textoArray=explode('!',$texto);
                            /*
                            echo "________________________"."<br>";
                            echo "EL ENUNCIADO ES: "."<br>";
                            */
                            echo "<i>".$textoArray[0]."</i>"."<br>";
                            /*
                            echo "________________________"."<br>";
                            echo "LAS OPCIONES SON: "."<br>";
                            */
                            ?>
                            <p>
                                <span class="seleccione ml-4">Seleccione una:</span>
                            </p>
                            <form action="calificarExamen_action.php" method="POST">
                                <?php
                                    for($i=1;$i<count($textoArray)-1;$i++){
                                ?>
                                <div class="form-check pl-5">
                                    <?php
                                        $nombre_opcion= "opcion".$x;
                                        $valor=$x."-".$i."-".$rangoDeProblemas[$x];
                                    ?>
                                    <label for="name" class="">
                                        <input type="radio" class="form-check-input" id="" name="<?php echo $nombre_opcion ?>" value="<?php echo $valor ?>">
                                        <?php echo $textoArray[$i]; 
                                        ?>    
                                    </label>    
                                </div>
                                <?php
                                    }
                                    fclose($fp);
                                    //CARGAMOS LA IMAGEN
                                    $sql3="SELECT ruta_imagen FROM problemas WHERE id='$rangoDeProblemas[$x]'";
                                    $resultado3=mysqli_query($conn,$sql3);
                                    $ruta_archivo_imagen=mysqli_fetch_array($resultado3);
                                    //$ruta_verdadera=realpath($ruta_archivo_imagen);
                                    //echo "Resultado: ".$ruta_archivo_imagen[0]."<br>";
                                ?>
                                <div class="d-flex justify-content-center p-4"> 
                                    <img class="img-responsive" src="<?php echo $ruta_archivo_imagen[0] ?>" alt="SIN IMAGEN">
                                </div> 
                                <div>
                                    <?php
                                        $sql4="SELECT opcion_correcta FROM problemas WHERE id='$rangoDeProblemas[$x]'";
                                        $resultado4=mysqli_query($conn,$sql4);
                                        $opcionVerdadera=mysqli_fetch_array($resultado4);
                                        //echo "OPCION CORRECTA: ".$opcionVerdadera[0];
                                        $respuestasCorrectas[$i]=$opcionVerdadera[0];
                                        //echo "OPCION VERDADERA: ".$respuestasCorrectas[$i];
                                    ?>
                                </div>    
                        </p>
                    </div>
                                  
                               
                </div><!--col-md-8-->
                <div class="col-md-2">
                    <div class="card tarjetaIzquierda">
                        <div class="card-body">
                            <h5>SIMULADOR</h5>
                            <!--<h5><i class="fa fa-bars"></i>SIMULADOR</h5>
                            <p>CUESTIONARIO</p>
                            <p>Terminar intento</p>
                            <p><i class="fa fa-flag"></i> Tiempo restante</p>-->
                        </div> 
                    </div>
                </div><!--col-2-->
            </div>
        <?php
            }
        ?>
    </div>
    <div class="row mt-3 mb-4">
        <div class="col-sm-4 col-md-5">
        </div>
        <div class="col-sm-4 col-md-2">
            <button id="boton_enviar" type="submit" class="btn btn-primary w-100">CALIFICAR</button>
            
        </div>
        <div class="col-sm-4 col-md-5">
        </div>                        
    </div>  
</form>
     <div class="row mt-3 mb-4">
        <div class="col-sm-4 col-md-5">
        </div>
        <div class="col-sm-4 col-md-2">
            <button id="btn_salir" type="" class="btn btn-danger w-100">SALIR</button>
        </div>
        <div class="col-sm-4 col-md-5">
        </div>                        
    </div>
<script>
$(window).on('load', function() {
    $('#boton_enviar').prop('disabled', true);
   
});

/*VALIDACION*/
$(document).ready(function(){
    $(this).on('change',function(){
          //alert("CAMBIO DETECTADO");
          var numeroSeleccionado=0
          jQuery("input[type='radio']").each(function() {
                     //alert( this.value + ":" + this.checked );
                     //alert(this.checked);
                     if(this.checked){
                             numeroSeleccionado=numeroSeleccionado+1;
                     }
           if(numeroSeleccionado>=5){
                  $('#boton_enviar').prop('disabled', false);
           }

          });
    });
});
</script>


</body>