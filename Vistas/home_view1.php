<!-- Pagina principal, menu de titulo, home... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home_stiles.css?15">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <!-- <script tipe="text/javascript" src="./Controladores/title_controller.js?14022023"></script> -->
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
    
                <!-- <a href="../recursos_humanos" class="col-md-2  text-reset text-uppercase d-flex align-items-center">
                    <img src="./resources/logo nuevo.png" alt="Logo EDGroup" class="" >
                </a> -->
                <h4 class="col-8 col-sm-8 col-md-8 col-lg-8">ED Group & TFS Customs Brokers, Inc</h4>
                

        </nav>
    </div>

    
    <!-- Titulo de menu principal -->
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>ED Group</h4>
        </div>

        <!-- Opciones de menu -->
        <div class="options__menu container-fluid">
            <div class="form-group row">
                <a class="btn btn-light form-control col-sm-12" href="../"><!--  selected -->
                    <div class="option">
                        <i class="fas fa-home" title="Inicio"></i>
                        Inicio
                    </div>
                </a>
            </div>

            <div class="form-group row">
                <button type="button" class="btn btn-light form-control col-sm-12">
                    <a class="" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados"></i>
                            Recursos Humanos
                        </div>
                    </a>
                </button>
            </div>

            <div class="form-group row">
                <button type="button" class="btn btn-light form-control col-sm-12">
                    <a class="">    
                        <div class="option">
                            <i class="fa-solid fa-file-pen" title="Supervisor"></i>
                            Otras Cosas
                        </div>
                    </a>
                </button>
            </div>
        </div>
    </div>

    <!-- Contenedor principal -->
    <main>
        <div class="container col-10 col-sm-7 col-md-4 col-lg-3" id="contenido">
            <div class="form-group row justify-content-center">
                <h3>Human Resources</h3>
            </div>

            <div class="form-group row justify-content-center">
                <h4>Recursos humanos</h3>
            </div>
            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <button type="button" class="btn btn-success form-control">
                        <a class="" href="recursos_humanos/evaluar">    
                            <div class="option">
                                <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                                Recursos Humanos
                            </div>
                        </a>
                    </button>
                </div>
            </div>
        </div>
    </main>


    <!-- Footer -->
    <br>
    <footer class="bg-dark text-white py-4 footer">
        <div class="container">
            <nav class="row">

                <!-- Footer -->
                <a href="#" class="col-3 text-reset text-uppercase d-flex align-items-center">
                    <div class="form-group">
                        <img src="./resources/logo nuevo 2.png" alt="Logo EDGroup" class="col-md-4" width="60px">
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

    <script src="./Controladores/menu_script.js?02022023"></script>

</body>
</html>