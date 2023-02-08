
(function(){
    //$('#1a').hide();
    console.log("Todo bien?");
    $('#1a').show();
})();

//22 preguntas, 0-21
var habilidades = [
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

const progressBar = document.getElementById("progreso");

function Next() 
{
    SaveAnswer();
    if (numPregunta < 21) {
        numPregunta++;
    }
    if (numPregunta == 21) {
        document.querySelector("#SiguienteBtn").disabled = true;
        document.querySelector("#EnviarBtn").disabled = false;
        const btnAnterior = document.getElementById("Anterior");
        btnAnterior.insertAdjacentHTML("beforebegin",
                "<div class='form-group' id='divComentarioGeneral'>" + 
                "<label for='comentarioGeneralEvaluacion'>Comentarios generales</label>" + 
                "<textarea class='form-control' id='comentarioGeneral' rows='3'></textarea>" +
                "</div>"
            );
    }
    // console.log('Viendo el style del progressBar'); // si funciona
    // document.getElementById('tablaEmpleado').setAttribute('style','display:none;');

    document.querySelector("#Anterior").disabled = false;
    
    PrintQuestions();
}

function Previous() {
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
        document.getElementById("divComentarioGeneral").remove();
    }
    PrintQuestions();
}

function PrintQuestions() {
    var lblHabilidad = document.getElementById("habilidad");
    var lblPregunta = document.getElementById("pregunta");
    
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

    lblPregunta.innerText = habilidades[numPregunta];
    
    // Mostrar respuesta respecto al index que se guardó
    if (respuestas[numPregunta] == 0) {
        $("#opcion").val("Muy Insactisfactorio");
    }
    if (respuestas[numPregunta] == 1) {
        $("#opcion").val("Insactisfactorio");
    }
    if (respuestas[numPregunta] == 2) {
        $("#opcion").val("Satisfactorio");
    }
    if (respuestas[numPregunta] == 3) {
        $("#opcion").val("Sobresaliente");
    }

    // Mostrar comentario del indice actual
    $("#comentario").val(comentarios[numPregunta]);
}

function SaveAnswer() {
    // para la resupesta
    var cmbOpcion = document.getElementById("opcion");
    respuestas[numPregunta] = cmbOpcion.selectedIndex;

    // para el comentario de dicha respuesta
    var inputComentario = document.getElementById("comentario");
    comentarios[numPregunta] = $("#comentario").val();
    //console.log("Comentario en arreglo; " + comentarios[numPregunta] + "\nComentario input; " + $("#comentario").val() + "\nIndice;" + numPregunta);
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


    // PROMEDIO 2 //////////////////////////////////////////////////////////
    for(; i < 5; i++) {
        promedio2 = promedio2 + respuestas[i];
    }
    promedio2 = promedio2/(5);


    // PROMEDIO 3 //////////////////////////////////////////////////////////
    for(; i < 10; i++) {
        promedio3 = promedio3 + respuestas[i];
    }
    promedio3 = promedio3/(5);


    // PROMEDIO 4 //////////////////////////////////////////////////////////
    for(; i < 15; i++) {
        promedio4 = promedio4 + respuestas[i];
    }
    promedio4 = promedio4/(5);

    //PROMEDIO 5 //////////////////////////////////////////////////////////
    for(; i < 18; i++) {
        promedio5 = promedio5 + respuestas[i];
    }
    promedio5 = promedio5/(3);
    

    var comentarioGeneral = document.getElementById("comentarioGeneral").value;
    

    //Enviando parametros para posterior post a base de datos
    $.post('Vistas/evaluacion_completa.php',
        {pr1:promedio1,pr2:promedio2,pr3:promedio3,pr4:promedio4,
            pr5:promedio5,res:respuestas,com:comentarios, comG:comentarioGeneral},
        function (data) {
        if (data!=null) {
            alert ("Evaluación enviada...");

            //Abrir la vista de evaluacion enviada
            var wait = 500;
            $.ajax({
                url: "Vistas/evaluacion_completa.php",
                beforeSend : function() {
                    $('#contenido').text('Enviando...');
                },
                success : function (data) {
                    setTimeout(function() {
                        $('#contenido').html(data);
                    }, wait
                    );
                }
            })
            
        }
        else {
            alert ("Error al enviar evaluación, verifique más tarde...");
            //Permanecer en la vista de evaluacion
        }
    });
}
