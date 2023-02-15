<!-- Vista de evaluacion de empleados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="../css/home_stiles.css?15">
    
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

    <!-- titulo y menu -->
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
                <h4 class="col-md-3">Welcome!</h4>

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


    <div class="container col-md-11">
        <div class="row">
            <div class="col-md-12 col-sm-10 col-lg-12">
                <br>
                <h3>Evaluación de Desempeño</h3>
                <h5>Información del empleado</h5>
            </div>
        </div>
        <div class="row" id="tablaEmpleado">
            <div class="form-group col-md-10 col-sm-10 col-lg-10">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Departamento</th>
                            <th scope="col">Puesto</th>
                            <th scope="col">Supervisor</th>
                            <th scope="col">Fecha de <br> contratación</th>
                            <th scope="col">Fecha de <br> evaluación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($fila = mysqli_fetch_assoc($resultado)){
                        ?>
                        <tr>
                            <td><?php echo $fila["Nombre"]; ?></td>
                            <td><?php echo $fila["Departamento"]; ?></td>
                            <td><?php echo $fila["Puesto"]; ?></td>
                            <td><?php echo $fila["Supervisor"]; ?></td>
                            <td><?php echo $fila["Fecha_Contratacion"]; ?></td>
                            <td><?=date('m/d/Y'); ?></td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="form-group col-sm-10 col-md-10 col-lg-10">
                <h5>Cuestionario</h5>
                Se calificara cada pregunta utilizando la escala numérica del 0 al 3.
                Donde 0 es Muy insactisfactorio, 1 es Insactisfactorio, 2 es Sactisfactorio y 3 es Sobresaliente.
                El promedio dará como resultado una puntuación general de desempeño.
            </div>
        </div>
        <br>

        <div class="progress">
            <div id="progreso" class="progress-bar bg-success" role="progressbar" style="width: 0%" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>


        <?php
            //Código para enviar la evaluación;
            //require_once("evaluacion_code.php");
            //echo "<script> alert('Entrando a enviar'); </script>";

        if (isset($_POST['enviar'])) {
            //echo "<script> alert('Entrando a enviar 2'); </script>";
            require_once('evaluacion_code.php');
        } else {
            //echo "<script> alert('No entro al enviar 2'); </script>";
        ?>
        <br>
        <form id="frmEvaluacion" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
            <div class="form-group">
            <!-- Pregunta 1  -->
                <h6 id="habilidad">1. Calidad y productividad</h6>
            <!-- Inciso a -->
                <div class="form-group row">
                    <label id="pregunta" for="Habilidad" class="col-sm-8 col-md-8 col-lg-8 col-form-label">A. Precisión y calidad del trabajo realizado.</label>
                </div>
                    
                <div id="1a" class="form-group row">
                    <select name="opcion1a" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment1a" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 1  -->
                
            <!-- Inciso b  -->
                    
                <div id="1b" class="form-group row">
                    <select name="opcion1b" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment1b" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 1  -->
                            
            <!-- Inciso c -->
                    
                <div id="1c" class="form-group row">
                    <select name="opcion1c" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment1c" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 1  -->
                            
            <!-- Inciso d -->
                    
                <div id="1d" class="form-group row">
                    <select name="opcion1d" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment1d" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 2  -->
                            
            <!-- Inciso a -->
                    
                <div id="2a" class="form-group row">
                    <select name="opcion2a" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment2a" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 2  -->
                            
            <!-- Inciso b -->
                    
                <div id="2b" class="form-group row">
                    <select name="opcion2b" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment2b" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 2  -->
                            
            <!-- Inciso c -->
                    
                <div id="2c" class="form-group row">
                    <select name="opcion2c" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment2c" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 2  -->
                            
            <!-- Inciso d -->
                    
                <div id="2d" class="form-group row">
                    <select name="opcion2d" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment2d" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 2  -->
                            
            <!-- Inciso e -->
                    
                <div id="2e" class="form-group row">
                    <select name="opcion2e" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment2e" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 3 -->
                            
            <!-- Inciso a -->
                    
                <div id="3a" class="form-group row">
                    <select name="opcion3a" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment3a" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 3  -->
                            
            <!-- Inciso b -->
                    
                <div id="3b" class="form-group row">
                    <select name="opcion3b" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment3b" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 3  -->
                            
            <!-- Inciso c -->
                    
                <div id="3c" class="form-group row">
                    <select name="opcion3c" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment3c" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 3  -->
                            
            <!-- Inciso d -->
                    
                <div id="3d" class="form-group row">
                    <select name="opcion3d" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment3d" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 3  -->
                            
            <!-- Inciso e -->
                    
                <div id="3e" class="form-group row">
                    <select name="opcion3e" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment3e" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 4  -->
                            
            <!-- Inciso a -->
                    
                <div id="4a" class="form-group row">
                    <select name="opcion4a" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment4a" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 4  -->
                            
            <!-- Inciso b -->
                    
                <div id="4b" class="form-group row">
                    <select name="opcion4b" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment4b" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 4  -->
                            
            <!-- Inciso c -->
                    
                <div id="4c" class="form-group row">
                    <select name="opcion4c" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment4c" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 4  -->
                            
            <!-- Inciso d -->
                    
                <div id="4d" class="form-group row">
                    <select name="opcion4d" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment4d" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 4  -->
                            
            <!-- Inciso e -->
                    
                <div id="4e" class="form-group row">
                    <select name="opcion4e" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment4e" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 5  -->
                            
            <!-- Inciso a -->
                    
                <div id="5a" class="form-group row">
                    <select name="opcion5a" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment5a" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 5  -->
                            
            <!-- Inciso b -->
                    
                <div id="5b" class="form-group row">
                    <select name="opcion5b" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment5b" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>

            <!-- Pregunta 5  -->
                            
            <!-- Inciso c -->
                    
                <div id="5c" class="form-group row">
                    <select name="opcion5c" class="form-control form-control-sm col-sm-3">
                        <option value="0">Muy Insactisfactorio</option>
                        <option value="1">Insactisfactorio</option>
                        <option value="2">Satisfactorio</option>
                        <option value="3">Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="text" name="coment5c" class="form-control form-control-sm col-sm-5" 
                        id="comentario" aria-describedby="textHelp" placeholder="Comentarios">
                    </div>
                </div>
                
                <div class='form-group' id='divComentarioGeneral'>
                    <label for='comentarioGeneral'>Comentarios generales</label>
                    <textarea class='form-control' rows='3' name="comentarioGeneral"></textarea>
                </div>

                <div class='form-group' id='divMetaProxima'>
                    <label for='metaProxima'>Meta próxima</label>
                    <textarea class='form-control' rows='2' name="metaProxima"></textarea>
                </div>

                <!-- Beforebegin del area de texto -->
                <!-- botones -->
                <button id="Anterior" type="button" class="btn btn-secondary" disabled onclick="Previous();">Anterior</button>
                <button id="SiguienteBtn" type="button" class="btn btn-secondary" onclick="Next();">Siguiente</button>
                <button id="enviar" type="submit" class="btn btn-primary" disabled name="enviar">Enviar</button>

<!-- Clave del empleado escondida -->
                <?php
                    $clave = "select `clave` from `empleado`";
                    $resultado = mysqli_query($link, $clave);
                    
                    while($fila = mysqli_fetch_assoc($resultado)){
                ?>
                    <input type="text" name="clave" value="<?php echo $fila["clave"]; ?>" style="display: none"></input>
                <?php
                    }
                ?>
                
            </div>
        </form>
        <?php
        }
        ?>
    </div>
    <?php mysqli_close($link); ?>

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