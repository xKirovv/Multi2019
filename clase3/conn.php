<?php
// saltos de lineas en un archivo 
//ciclos 
//Tarea proximo martes:
//hacer un resumen de los tipos de datos de MYSql y para que se usan 
//para que sirve, el include, includeonce, requiere

include "class.php";
//crear conexion
$conn = new mysqli($servername, $username, $password, $db);
//chequear conexion
if($conn ->connect_error){
    die("error en la conexion: ".$conn->connect_error);
}
//echo "Conexion exitosa"

?>
