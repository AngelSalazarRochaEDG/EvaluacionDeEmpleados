<?php

$dbname = 'edgroup';
$dbuser = 'root';
$dbhost = 'localhost';
$dbpassword = '';

$link = mysqli_connect($dbhost, $dbuser, $dbpassword, $dbname);

if($link === false) {
    die("Error en la conexión". mysqli_connect_error());
}

?>
