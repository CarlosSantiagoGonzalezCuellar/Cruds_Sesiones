<?php
$servidor = "localhost";
$usuario  = "root";
$clave    = "";
$bdatos   = "agendas";

// crear conexion 
$conn = new mysqli($servidor,$usuario,$clave,$bdatos);

// chequeo de la conexion
if($conn->connect_error)
{
	die("error en conexion ".$conn->connect_error);
}
?>