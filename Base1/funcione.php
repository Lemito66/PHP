<?php
//Archivo con la funcionalidad estándar para varias de las páginas de este sitio web.
error_reporting(E_ALL);

//Declaración de variables de uso global
$Pathing ="http://localhost/Programacion%20Avanzada/Base/imagenes/";$MaxReg = 5;
$MaxReg = 5;
$conn; //Variable para almacenar la conexión con el gestor de base de datos

//Conecta con la base y selecciona la base de trabajo
function Conectar()
{
	global $conn; //Se usa el $conn de mayor ámbito
	$usuario = 'root';
	$clave = '';
	$conn = new PDO('mysql:host=localhost;dbname=base',$usuario,$clave);
}

function Desconectar()
{
	mysqli_close();
    
}
?>

