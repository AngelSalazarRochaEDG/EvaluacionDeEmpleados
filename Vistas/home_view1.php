<!-- Pagina principal, menu de titulo, home... -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluación de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/home_stiles.css?17022023">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script tipe="text/javascript" src="./Controladores/title_controller.js?16022023"></script>
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
                <a class="btn btn-light form-control col-sm-12" href="./"><!--  selected -->
                    <div class="option">
                        <i class="fa-solid fa-reply" title="Inicio"></i>
                        Regresar
                    </div>
                </a>
            </div>

            <div class="form-group row">
                <a class="btn btn-light form-control col-sm-12" href="">    
                    <div class="option">
                        <i class="fa-solid fa-users" title="Evaluacion de empleados"></i>
                        Recursos Humanos
                    </div>
                </a>
            </div>

        </div>
    </div>

    <!-- Contenedor principal -->
    <main>
        <div class="container col-12 col-sm-10 col-md-9 col-lg-4" id="contenido">
            
            <div class="form-group row justify-content-center">
                <h3>
                    <span id="currentDay"></span>
                </h3>
            </div>

            <div class="form-group row justify-content-center">
                <h4>Recursos humanos</h3>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Proceso General
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Carta Poder (Power of Attorney)
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Consultar Importador (Query importer)
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Forma 5106 Alta o Cambios de Importador
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Fianza Sencilla (Single Entry Bond)
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            C-TPAT
                        </div>
                    </a>
                </div>
            </div>

            <div class="options__home">
                <div class="form-group row justify-content-md-center">
                    <a class="btn btn-success form-control" href="recursos_humanos/evaluar">    
                        <div class="option">
                            <i class="fa-solid fa-users" title="Evaluacion de empleados" ></i>
                            Evaluación Empleados
                        </div>
                    </a>
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