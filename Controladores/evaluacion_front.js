//Leer submit


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

function Next() 
{
    // console.log("");
    SaveAnswer();
    if (numPregunta < 21) {
        numPregunta++;
    }
    if (numPregunta == 21) {
        document.querySelector("#SiguienteBtn").disabled = true;
        document.querySelector("#EnviarBtn").disabled = false;
    }
    
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
    
    lblPregunta.innerText = habilidades[numPregunta];
    
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
}

function SaveAnswer() {
    var cmbOpcion = document.getElementById("opcion");
    respuestas[numPregunta] = cmbOpcion.selectedIndex;
}

//Leer selección
function ShowSelected()
{
    /* Para obtener el texto */
    var combo = document.getElementById("opcion");
    //var selected = combo.options[combo.selectedIndex].text;
    console.log(combo.selectedIndex);
}

function Enviar() {
    var promedio1 = 0, promedio2 = 0, promedio3 = 0, promedio4 = 0, promedio5
    
}