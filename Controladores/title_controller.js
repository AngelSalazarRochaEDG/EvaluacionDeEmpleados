
//Current day al cargar pagina
function currentDay() {
    var date = new Date();
    var day = (new Intl.DateTimeFormat('en-US', {
        weekday: 'long',
        month: 'long',
        day: '2-digit',
        year: 'numeric',

    }).format(date));

    document.getElementById("currentDay").innerHTML = day;
}


//Al arranque mostrar home
// (function(){
//     //tiempo de espera
//     var wait = 500;
//     $.ajax({
//         //pagina por cargar
//         url: "Vistas/home_view.php",
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
function VerEvaluar() {
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "../recursos_humanos/evaluacion",
        beforeSend : function() {
            //divider donde se cargará el contenido
            $('#contenido').text('Cargando Evaluación...');
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
function VerEvaluaciones() {
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "Vistas/evaluaciones_view.php",
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

function VerSupervisor() {
    
    var wait = 500;
    $.ajax({

        url: "Vistas/supervisor_view.php",
        beforeSend : function() {
            
            $('#contenido').text('Cargando Supervision...');
        },
        success : function(data) {
            setTimeout(function() {
                $('#contenido').html(data);
            }, wait
            );
        }
    })
}