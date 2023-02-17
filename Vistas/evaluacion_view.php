<!-- Vista de evaluacion de empleados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/home_stiles.css?17022023A">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script tipe="text/javascript" src="../Controladores/title_controller.js?17022023"></script>
    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>

</head>
<body id="body" onload="currentDay()">

    <!-- titulo y menu -->
    <div id="main-app" class="main-wrapper">
        <nav class="navbar navbar-light bg-light">
            <header class="col-md-2 col-4 row">
                <div class="icon__menu">
                    <i class="fas fa-bars" id="btn_open"></i>
                </div>
            </header>

            <h4 class="col-8 col-sm-8 col-md-8 col-lg-8">ED Group & TFS Customs Brokers, Inc</h4>
        </nav>
    </div>
    
    <!-- Titulo de menu principal -->
    <div class="menu__side" id="menu_side">
        
        <div class="name__page">
            <a href="../">
                <i class="fas fa-home " title="Inicio"></i>
            </a>
            <a href="../">
                <h4 class="">ED Group</h4>
            </a>
        </div>

        <!-- Opciones de menu -->
        <div class="options__menu container-fluid">
            <div class="form-group row">
                <a class="btn btn-light form-control col-sm-12" href="../recursos_humanos"><!--  selected -->
                    <div class="option">
                        <i class="fa-solid fa-reply" title="Inicio"></i>
                        Regresar
                    </div>
                </a>
            </div>

            <div class="form-group row">
                <button type="button" class="btn btn-light form-control col-sm-12" onclick="VerEvaluar();">
                    <div class="option">
                        <i class="fa-solid fa-file-pen" title="Evaluar"></i>
                        Evaluar
                    </div>
                </button>
            </div>

            <div class="form-group row">
                <button type="button" class="btn btn-light form-control col-sm-12" onclick="VerEvaluaciones();">    
                    <div class="option">
                        <i class="fa-solid fa-file" title="Evaluacion de empleados"></i>
                        Evaluaciones previas
                    </div>
                </button>
            </div>

            <div class="form-group row">
                <button class="btn btn-light form-control col-sm-12" onclick="VerSupervisor();">    
                    <div class="option">
                        <i class="fa-solid fa-file-pen" title="Supervisor"></i>
                        Supervision
                    </div>
                </button>
            </div>
        </div>
    </div>

    <!-- Contenedor de cuerpo -->
    <div class="container" >
        <h3 class="row justify-content-center" id="titulo">
            <span id="currentDay"></span>
        </h3>
        <!-- container que carga el contenido de las views. -->
        <div class="container" id="contenido">
        </div>
    </div>


    <!-- Pie de pagina -->
    <footer class="bg-dark text-white py-4 footer">
        <div class="container">
            <nav class="row">

                <!-- Footer -->
                <a href="#" class="col-3 text-reset text-uppercase d-flex align-items-center">
                    <div class="form-group">
                        <img src="../resources/logo nuevo 2.png" alt="Logo EDGroup" class="col-md-4" width="20px">
                        ED Group
                    </div>
                </a>

                <!-- menu  -->
                <ul class="col-3 list-unstyled">
                    <li class="font-weight-blod text-uppercase">Principal</li>
                    <!--edgroup univeristy... -->
                    <li class="d-flex justify-content-between" ><a href="#" class="text-reset text-white">Link 1</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 2</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 3</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 4</a></li>
                </ul>

                <!-- cursos -->
                <ul class="col-3 list-unstyled">
                    <li class="font-weight-blod text-uppercase">Redes sociales</li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 1</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 2</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 3</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 4</a></li>
                </ul>
                
                <!-- social networks -->
                <ul class="col-3 list-unstyled">
                    <li class="font-weight-blod text-uppercase">Ayuda</li>
                    <!-- soporte, contactos, ubicación... -->
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 1</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 2</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 3</a></li>
                    <li class="d-flex justify-content-between"><a href="#" class="text-reset text-white">Link 4</a></li>
                </ul>
            </nav>
        </div>
    </footer>

    <script src="../Controladores/menu_script.js"></script>
    
    <script tipe="text/javascript" src="../Controladores/evaluacion_front.js?14022023"></script>
</body>
</html>