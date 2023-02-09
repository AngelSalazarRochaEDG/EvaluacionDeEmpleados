// utilizado para mostrar y ocultar los grupos por pregunta, al enviar un post se enviarán todos y cada uno de los resultados
// por separado hacia la base de datos
var grupos = [
    $("#1a"), $("#1b"), $('#1c'), $('#1d'), $('#2a'), $('#2b'), $('#2c'), $('#2d'),
    $('#2e'), $('#3a'), $('#3b'), $('#3c'), $('#3d'), $('#3e'), $('#4a'),
    $('#4b'), $('#4c'), $('#4d'), $('#4e'), $('#5a'), $('#5b'), $('#5c')
];

var selects = document.querySelectorAll("select");
var inputs = document.querySelectorAll("input");

(function(){
    //ocultar todos los grupos excepto el primero
    for (var i = 1; i < grupos.length; i++) {
        grupos[i].hide();
    }

    //ocultar div de comentario final
    $("#divComentarioGeneral").hide();
    //ocultar div de meta proxima
    $("#divMetaProxima").hide();
})();

//22 preguntas, 0-21
var preguntas = [
    "A. Precisión y calidad del trabajo realizado.",
    "B. Cantidad de trabajo completada.",
    "C. Organización del trabajo en tiempo y forma",
    "D. Cuidado de herramientas y equipo.",

    "A. Nivel de experiencia y conocimiento técnico para el trabajo requerido.",
    "B. Uso y conocimiento de métodos y procedimientos",
    "C. Uso y conocimiento de herramientas ",
    "D. Puede desempeñarse con poca o ninguna ayuda",
    "E. Capacidad de enseñar / entrenar a otros.",

    "A. Trabaja sin necesidad de supervisión.",
    "B. Se esfuerza más si la situación lo requiere",
    "C. Puntualidad",
    "D. Asistencia",
    "E. Uniforme",

    "A. Cuando completa sus tareas, busca nuevas asignaciones. ",
    "B. Elige prioridades de forma eficiente",
    "C. Sugiere mejoras",
    "D. Identifica errores y trabaja para arreglarlos",
    "E. Motiva y ayuda a los demás",

    "A. Trabaja fluidamente con supervisores, pares y subordinados",
    "B. Tiene una actitud positiva y proactiva.",
    "C. Promueve el trabajo en equipo"
];

var respuestas = [0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0];
var comentarios = ["","","","","","","","","","","","","","","","","","","","","",""];

var numPregunta = 0;

var progressBar = document.getElementById("progreso");

function Next() 
{
    // habilitar el siguiente y deshabilitar el anterior
    grupos[numPregunta+1].show();
    grupos[numPregunta].hide();

    SaveAnswer();
    if (numPregunta < 21) {
        numPregunta++;
    }
    if (numPregunta == 21) {
        document.querySelector("#SiguienteBtn").disabled = true;
        document.querySelector("#EnviarBtn").disabled = false;
        const btnAnterior = document.getElementById("Anterior");
        
        $("#divComentarioGeneral").show();

    }

    document.querySelector("#Anterior").disabled = false;
    
    PrintQuestions();
}

function Previous() {
    //Habilitar el anterior y deshabilitar el acutal
    grupos[numPregunta].hide();
    grupos[numPregunta-1].show();

    SaveAnswer();
    if (numPregunta > 0) {
        numPregunta--;
    }
    if (numPregunta == 0) {
        document.querySelector("#Anterior").disabled = true;
    }
    
    if (numPregunta < 21) {
        document.querySelector("#SiguienteBtn").disabled = false;
        document.querySelector("#EnviarBtn").disabled = true;
    }
    if (numPregunta == 20)
    {
        //document.getElementById("divComentarioGeneral").remove();
        $("#divComentarioGeneral").hide();
    }
    PrintQuestions();
}

function PrintQuestions() {
    var lblHabilidad = document.getElementById("habilidad");
    var lblPregunta = document.getElementById("pregunta");
    
    // cambiar de titulo
    if (numPregunta <= 3){
        lblHabilidad.innerText = "1. Calidad y productividad";
    } else {
        if (numPregunta >= 4 && numPregunta <= 8) {
            lblHabilidad.innerText = "2. Conocimiento";
        } else {
            if (numPregunta >= 9 && numPregunta <= 13) {
                lblHabilidad.innerText = "3. Compromiso y presentismo";
            } else {
                if (numPregunta >= 14 && numPregunta <= 18) {
                    lblHabilidad.innerText = "4. Iniciativa/Liderazgo";
                } else {
                    if (numPregunta >= 19 && numPregunta <= 21) {
                        lblHabilidad.innerText = "5. Trabajo en equipo";
                    }
                }
            }
        }
    }
    
    //Efectuar progreso en barra de progreso
    progressBar.setAttribute('style', 'width: ' + (numPregunta * 100/21) + '%');
    progressBar.setAttribute('aria-valuenow', (numPregunta * 100/21) + "");

    //cambiar de pregunta
    lblPregunta.innerText = preguntas[numPregunta];
    
    // Guardar el indice actual seleccionado
    selects[numPregunta].selectedIndex = respuestas[numPregunta];
    
    // Mostrar comentario del indice actual
    inputs[numPregunta].textContent = comentarios[numPregunta];
}

function SaveAnswer() {
    // para la resupesta
    respuestas[numPregunta] = selects[numPregunta].selectedIndex;

    // para el comentario de dicha respuesta
    comentarios[numPregunta] = inputs[numPregunta].value;
    console.log(comentarios[numPregunta]);
}


function Enviar() {
    // calcular promedios
    var promedio1 = 0, promedio2 = 0, promedio3 = 0, promedio4 = 0, promedio5 = 0;

    var i; // i < num preguntas, promedion = promedio / num pregutnas 
    // PROMEDIO 1 //////////////////////////////////////////////////////////
    for (i = 0; i < 4; i++) {
        promedio1 = promedio1 + respuestas[i];
    }
    promedio1 = promedio1/i;
    console.log(promedio1);
    
    // PROMEDIO 2 //////////////////////////////////////////////////////////
    for(; i < 9; i++) {
        promedio2 = promedio2 + respuestas[i];
    }
    promedio2 = promedio2/(5);
    console.log(promedio2);
    
    
    // PROMEDIO 3 //////////////////////////////////////////////////////////
    for(; i < 14; i++) {
        promedio3 = promedio3 + respuestas[i];
    }
    promedio3 = promedio3/(5);
    console.log(promedio3);
    
    
    // PROMEDIO 4 //////////////////////////////////////////////////////////
    for(; i < 19; i++) {
        promedio4 = promedio4 + respuestas[i];
    }
    promedio4 = promedio4/(5);
    console.log(promedio4);
    
    //Guardar lo ultimo en caso de que no haya sido guardado
    respuestas[numPregunta] =  selects[numPregunta].selectedIndex;
    //PROMEDIO 5 //////////////////////////////////////////////////////////
    for(; i < 22; i++) {
        promedio5 = promedio5 + respuestas[i];
    }
    promedio5 = promedio5/(3);
    console.log(promedio5);
    


    //var comentarioGeneral = document.getElementById("comentarioGeneral").value;

    /////////// Este codigo es util mas no se usará para enviar los datos a la bd, 
    /////////// en su lugar se enviará todo desde la ventana principal.
    // //Enviando parametros para posterior post a base de datos
    // $.post('Vistas/evaluacion_view.php',
    //     {pr1:promedio1,pr2:promedio2,pr3:promedio3,pr4:promedio4,
    //         pr5:promedio5,res:respuestas,com:comentarios, comG:comentarioGeneral},
    //     function (data) {
    //     if (data!=null) {
    //         //alert ("Evaluación enviada...");

    //         //Abrir la vista de evaluacion enviada
    //         var wait = 500;
    //         $.ajax({
    //             url: "Vistas/evaluacion_view.php",
    //             beforeSend : function() {
    //                 $('#contenido').text('Enviando...');
    //             },
    //             success : function (data) {
    //                 setTimeout(function() {
    //                     $('#contenido').html(data);
    //                 }, wait
    //                 );
    //             }
    //         })
            
    //     }
    //     else {
    //         alert ("Error al enviar evaluación, verifique más tarde...");
    //         //Permanecer en la vista de evaluacion
    //     }
    // });
}
