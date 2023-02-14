<?php

    // echo "<script> alert('Entrando a guardar los datos');
    // </script>;";

    //Guardar la evaluacion
    $fecha_evaluacion = date('m/d/Y');
    $comentario_empleado = $_POST['comentarioGeneral'];
    //$comentario_supervisor
    $meta_proxima = $_POST['metaProxima'];



    //Calcular el desempeño, mas adelante
    //$desempenio_general = $_POST['desempenio'];

    $emp_clave = $_POST['clave'];

    $sql = "insert into evaluacion (comentario_empleado, meta_proxima, emp_clave) values ('".$comentario_empleado."','".$meta_proxima. "','".$emp_clave."')";

    $result = false;
    $result = mysqli_query($link, $sql);

    if(!$resultado) {
        echo "<script> alert('Error, los datos de evaluacion no se ingresaron correctamente');

        </script>";
    } else {
        // echo ("<script> alert('Correcto en evaluacion');
        // </script>");
    }

    // consultar la clave de la evaluacion
    $sqlIdEvaluacion = "select max(id_evaluacion) as id_evaluacion from evaluacion"; // Esto regresa la ultima evaluación
    $result = false;
    $result = mysqli_query($link, $sqlIdEvaluacion);
    $fila = mysqli_fetch_assoc($result);
    $id_evaluacion = $fila["id_evaluacion"];


    //Actualizar la tabla respuestas
    // Numero, inciso, id_evaluacion, puntuacion, comentario, los promedios son calculables
    $respuesta1a = $_POST['opcion1a']; $comentario1a = $_POST['coment1a'];
    $respuesta1b = $_POST['opcion1b']; $comentario1b = $_POST['coment1b'];
    $respuesta1c = $_POST['opcion1c']; $comentario1c = $_POST['coment1c'];
    $respuesta1d = $_POST['opcion1d']; $comentario1d = $_POST['coment1d'];

    $respuesta2a = $_POST['opcion2a']; $comentario2a = $_POST['coment2a'];
    $respuesta2b = $_POST['opcion2b']; $comentario2b = $_POST['coment2b'];
    $respuesta2c = $_POST['opcion2c']; $comentario2c = $_POST['coment2c'];
    $respuesta2d = $_POST['opcion2d']; $comentario2d = $_POST['coment2d'];
    $respuesta2e = $_POST['opcion2e']; $comentario2e = $_POST['coment2e'];

    $respuesta3a = $_POST['opcion3a']; $comentario3a = $_POST['coment3a'];
    $respuesta3b = $_POST['opcion3b']; $comentario3b = $_POST['coment3b'];
    $respuesta3c = $_POST['opcion3c']; $comentario3c = $_POST['coment3c'];
    $respuesta3d = $_POST['opcion3d']; $comentario3d = $_POST['coment3d'];
    $respuesta3e = $_POST['opcion3e']; $comentario3e = $_POST['coment3e'];

    $respuesta4a = $_POST['opcion4a']; $comentario4a = $_POST['coment4a'];
    $respuesta4b = $_POST['opcion4b']; $comentario4b = $_POST['coment4b'];
    $respuesta4c = $_POST['opcion4c']; $comentario4c = $_POST['coment4c'];
    $respuesta4d = $_POST['opcion4d']; $comentario4d = $_POST['coment4d'];
    $respuesta4e = $_POST['opcion4e']; $comentario4e = $_POST['coment4e'];

    $respuesta5a = $_POST['opcion5a']; $comentario5a = $_POST['coment5a'];
    $respuesta5b = $_POST['opcion5b']; $comentario5b = $_POST['coment5b'];
    $respuesta5c = $_POST['opcion5c']; $comentario5c = $_POST['coment5c'];


    // Query de Respuestas
    $sqlRespuesta = 
        "insert into respuesta (numero, inciso, id_evaluacion, puntuacion, comentario) values 
        ('1', 'a','".$id_evaluacion."','".$respuesta1a."','".$comentario1a."'),
        ('1', 'b','".$id_evaluacion."','".$respuesta1b."','".$comentario1b."'),
        ('1', 'c','".$id_evaluacion."','".$respuesta1c."','".$comentario1c."'),
        ('1', 'd','".$id_evaluacion."','".$respuesta1d."','".$comentario1d."'),

        ('2', 'a','".$id_evaluacion."','".$respuesta2a."','".$comentario2a."'),
        ('2', 'b','".$id_evaluacion."','".$respuesta2b."','".$comentario2b."'),
        ('2', 'c','".$id_evaluacion."','".$respuesta2c."','".$comentario2c."'),
        ('2', 'd','".$id_evaluacion."','".$respuesta2d."','".$comentario2d."'),
        ('2', 'e','".$id_evaluacion."','".$respuesta2e."','".$comentario2e."'),

        ('3', 'a','".$id_evaluacion."','".$respuesta3a."','".$comentario3a."'),
        ('3', 'b','".$id_evaluacion."','".$respuesta3b."','".$comentario3b."'),
        ('3', 'c','".$id_evaluacion."','".$respuesta3c."','".$comentario3c."'),
        ('3', 'd','".$id_evaluacion."','".$respuesta3d."','".$comentario3d."'),
        ('3', 'e','".$id_evaluacion."','".$respuesta3e."','".$comentario3e."'),

        ('4', 'a','".$id_evaluacion."','".$respuesta4a."','".$comentario4a."'),
        ('4', 'b','".$id_evaluacion."','".$respuesta4b."','".$comentario4b."'),
        ('4', 'c','".$id_evaluacion."','".$respuesta4c."','".$comentario4c."'),
        ('4', 'd','".$id_evaluacion."','".$respuesta4d."','".$comentario4d."'),
        ('4', 'e','".$id_evaluacion."','".$respuesta4e."','".$comentario4e."'),

        ('5', 'a','".$id_evaluacion."','".$respuesta5a."','".$comentario5a."'),
        ('5', 'b','".$id_evaluacion."','".$respuesta5b."','".$comentario5b."'),
        ('5', 'c','".$id_evaluacion."','".$respuesta5c."','".$comentario5c."');
    ";

    $result = false;
    $result = mysqli_query($link, $sqlRespuesta);

    if (!$resultado)
    {
        echo "<script> alert('Error al guardar de respuestas');
        </script>";
    } else {
        // echo ("<script> alert('Correcto en respuestas');
        // </script>");
    }

    // Actualizar desempeño de evaluacion respecto al promedio de las respuestas
    $sqlDesempenio = "update evaluacion set desempenio = (select avg(puntuacion) 
        from respuesta where id_evaluacion = '".$id_evaluacion."') where id_evaluacion = '".$id_evaluacion."';";

    $result = false;
    $result = mysqli_query($link, $sqlDesempenio);

    if (!$resultado)
    {
        echo ("<script> alert('Error al actualizar evaluación');
        </script>");
    } else {
        echo ("<script> alert('Correcto en actualizar evaluación');
            window.location = '../index.php'
        </script>");
        //header('location: evaluacion');
    }
?>
