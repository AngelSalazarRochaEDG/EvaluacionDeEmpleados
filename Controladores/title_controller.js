//Controladores de menu de titulo o menu lateral

// Mostrar el contenido de la pagina principal con una funcion
// que se ejecute al iniciar la pagina


// original;
// $('#btnAccion').click(function(){...

// Al arranque mostrar home
(function(){
    console.log("todo bien1");
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "Vistas/home_view.php",
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
})();

// Vista de home de nuevo pero con boton
function VerHomeTitle() {
    console.log("todo bien de evaluacion");
    //tiempo de espera
    var wait = 500;
    $.ajax({
        //pagina por cargar
        url: "Vistas/home_view.php",
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
    console.log("todo bien de evaluacion");
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