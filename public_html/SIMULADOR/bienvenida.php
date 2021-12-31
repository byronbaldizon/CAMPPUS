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
            background-image: url(images/arte/tron.jpg);
            background-repeat: no-repeat;
            background-size: cover;
        }
        .card{
            background-color: rgba(0,0,0,0.4);
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
    <div class="container-fluid mt-4">
        <div class="row">
            <div class="col-sm-2 col-lg-3"></div>
            <div class="col-sm-8 col-lg-6">
                <div class="card mt-4">
                    <div class="card-header">
                        <h1>BIENVENIDO A &omega;-SYM</h1>
                        <h4>SIMULADOR DE EX&Aacute;MENES</h4>
                    </div>
                    <div class="card-body">
                        <p><b>&omega;-SYM <i>(omegasym)</i></b> es una aplicaci&oacute;n totalmente <b><u>gratuita</u></b> para que
                        puedas medir tus avances en tus estudios.
                        </p>
                        <p><b>&omega;-SYM</b> fue desarrollado por las empresas <b>MI HOGAR MI TRABAJO</b>
                           y <b>XENOBYT</b> para los estudiantes de <b>BIOFISICA</b> del CBC.     
                        </p>
                        <p>Con <b>&omega;-SYM</b> podr&aacute;s medir tus conocimientos para mejorar tu aprendizaje</p>
                        <p>Pronto estaremos ampliando esta aplicaci&oacute;n a otros cursos.</p>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary btnIngresar w-100">PEDIR EXAMEN</button><br />
                        <button class="btn btn-danger btnRegresar w-100 mt-4 mb-4">REGRESAR</button><br />
                    </div>
                </div>
            </div>
            <div class="col-sm-2 col-lg-3"></div>
        </div>
    </div>
</body>