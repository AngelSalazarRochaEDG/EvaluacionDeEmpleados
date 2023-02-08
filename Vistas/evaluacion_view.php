<!-- Vista de evaluacion de empleados -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evaluacion de empleados</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/home_stiles.css?1">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>

    <script tipe="text/javascript" src="./Controladores/evaluacion_front.js?07022023"></script>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-10 col-lg-12">
                <br>
                <h3>Evaluación de Desempeño</h3>
                <h5>Información del empleado</h5>
            </div>
        </div>
        <div class="row">
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
                        <tr>
                            <td>Steve Rogers</td>
                            <td>Operación</td>
                            <td>Inbond</td>
                            <td>Ing. Clara</td>
                            <td>2023/01/26</td>
                            <td>2023/01/26</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <br>
        
        <div class="row">
            <div class="form-group col-sm-9 col-md-7 col-lg-5">
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

        <br>
        <form id="frmEvaluacion">
            <div class="form-group">
                <h6 id="habilidad">1. Calidad y productividad</h6>
                <div class="form-group row">
                    <label id="pregunta" for="Habilidad" class="col-sm-4 col-form-label">A. Precisión y calidad del trabajo realizado.</label>
                    
                    <!-- select, opción --><!-- onchange="ShowSelected();"-->
                    <select id="opcion" class="form-control form-control-sm col-sm-3">
                        <option>Muy Insactisfactorio</option>
                        <option>Insactisfactorio</option>
                        <option>Satisfactorio</option>
                        <option>Sobresaliente</option>
                    </select>
                    
                    <div class="col">
                        <input type="email" class="form-control form-control-sm col-sm-7" 
                            id="comentario" aria-describedby="emailHelp" placeholder="Comentarios">
                    </div>

                </div>
                <!-- Beforebegin del area de texto -->
                
                <!-- botones -->
                <button id="Anterior" type="button" class="btn btn-secondary" disabled onclick="Previous();">Anterior</button>
                <button id="SiguienteBtn" type="button" class="btn btn-secondary" onclick="Next();">Siguiente</button>
                <button id="EnviarBtn" type="button" class="btn btn-primary" disabled onclick="Enviar();">Enviar</button>
            </div>
        </form>
    </div>
</body>
</html>