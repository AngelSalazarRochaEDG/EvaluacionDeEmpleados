<?php

$dbname = 'edgroup';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';

$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if($link === false) {
    die("Error en la conexión". mysqli_connect_error());
}

// session_start();

// class Conectar() {
//     protected $dbh;
    
//     protected function Conexion() {
//         try {
//             $conectar = $this -> dbh = new PDO("mysql:local=localhost;dbname=edgroup","root","");
//             return $conectar;
//         } catch (Exception $ex) {
//             print "¡Error de conexión: " . $e->getMessage() . "<br>";
//             die();
//         }
//     }

//     public function set_names() {
//         return $this->dbh->query("SET NAMES 'utf8'");
//     }

//     public function ruta() {
//         return "http://localhost/EvaluacionDeEmpleados";
//     }
// }
?>