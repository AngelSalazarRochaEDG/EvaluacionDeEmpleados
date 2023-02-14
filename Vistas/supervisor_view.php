<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supervision</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="./css/home_stiles.css?1">
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body>
    <?php
        require_once("../config/conexion.php");
        // Esto vendria por parametros cuando sea llamado por un usuario de tipo empleado.
        $consulta = "select `Nombre`, `Departamento`, `Puesto`, `Supervisor`, `Fecha_Contratacion` from `empleado`";
        $resultado = mysqli_query($link, $consulta);
    ?>

    
</body>
</html>