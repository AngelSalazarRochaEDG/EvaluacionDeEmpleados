//Controladores de menu de titulo o menu lateral

// Mostrar el contenido de la pagina principal con una funcion
// que se ejecute al iniciar la pagina


// original;
// $('#btnAccion').click(function(){...

// Al arranque mostrar home
// (function(){
//     //tiempo de espera
//     var wait = 500;
//     $.ajax({
//         //pagina por cargar
//         url: "Vistas/home_title.php",
//         beforeSend : function() {
//             //divider donde se cargará el contenido
//             $('#contenido').text('Cargando Inicio...');
//         },
//         success : function(data) {
//             setTimeout(function() {
//                 $('#contenido').html(data);
//             }, wait
//             );
//         }
//     })
// })();

// Vista de home de nuevo pero con boton
function VerHomeTitle() {
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "Vistas/home_title.php",
        beforeSend : function() {
            //divider donde se cargará el contenido
            $('#contenido').text('Cargando Inicio...');
        },
        success : function(data) {
            setTimeout(function() {
                $('#contenido').html(data);
            }, wait
            );
        }
    })
}

// Vista de evaluación...
function VerEvaluacion() {
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "Vistas/evaluacion_view.php",
        beforeSend : function() {
            //divider donde se cargará el contenido
            $('#contenido').text('Cargando Test...');
        },
        success : function(data) {
            setTimeout(function() {
                $('#contenido').html(data);
            }, wait
            );
        }
    })
}

