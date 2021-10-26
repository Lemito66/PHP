<?php
error_reporting(E_ALL);
$conn; //variable para almacenar la conexion con el gestor de base de datos
   function Conectar()
   {
       global $conn; //se usa el $conn de mayor ambito
       $usuario = 'root';
       $clave = '';
       $conn = new PDO ('mysql:host=localhost;dbname=proyecto',$usuario,$clave);
       $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   }
  
?>