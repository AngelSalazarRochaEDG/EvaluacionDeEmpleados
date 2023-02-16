<!-- Vista de evaluacion de empleados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/home_stiles.css?16">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script src="https://kit.fontawesome.com/41bcea2ae3.js"></script>

</head>
<body id="body">
    <?php
        require_once("../config/conexion.php");
        // Esto vendria por parametros cuando sea llamado por un usuario de tipo empleado.
        $consulta = "select `Nombre`, `Departamento`, `Puesto`, `Supervisor`, `Fecha_Contratacion` from `empleado`";
        $resultado = mysqli_query($link, $consulta);
    ?>

    <!-- titulo y boton menu -->
    <div id="main-app" class="main-wrapper">
        <nav class="navbar navbar-light bg-light">
            
                <header class="col-md-1">
                    <div class="icon__menu">
                        <i class="fas fa-bars" id="btn_open"></i>
                    </div>
                </header>
    
                <a href="../recursos_humanos" class="col-md-2  text-reset text-uppercase d-flex align-items-center">
                    <img src="../resources/logo nuevo.png" alt="Logo EDGroup" class="" >
                </a>
                <h4 class="col-md-3">ED Group - Evaluacion</h4>

        </nav>
    </div>
    
    <!-- Titulo de menu -->
    <div class="menu__side" id="menu_side">
        <div class="name__page">
            <i class="fas fa-home" title="Inicio"></i>
            <h4>ED Group</h4>
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
                <a class="btn btn-light form-control col-sm-12" href="evaluar"><!--  selected -->
                    <div class="option">
                        <i class="fa-solid fa-file-pen" title="Inicio"></i>
                        Evaluar
                    </div>
                </a>
            </div>

            <div class="form-group row">
                <a class="btn btn-light form-control col-sm-12" href="evaluaciones">    
                    <div class="option">
                        <i class="fa-solid fa-file" title="Evaluacion de empleados"></i>
                        Evaluaciones previas
                    </div>
                </a>
            </div>

            <div class="form-group row">
                <a class="btn btn-light form-control col-sm-12" href="supervision">    
                    <div class="option">
                        <i class="fa-solid fa-file-pen" title="Supervisor"></i>
                        Supervision
                    </div>
                </a>
            </div>
        </div>
    </div>
    
    <?php //mysqli_close($link); ?>

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