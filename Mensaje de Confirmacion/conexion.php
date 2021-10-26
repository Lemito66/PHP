<?php
    /* global $mysqli;
    $mysqli= $mysqli_connect("localhost","root","","confirmacion");
    if ($mysqli) {
        # code...
        echo("Si");
    } */
    
    function Conectar()
    {
        global $conn; //Se usa el $conn de mayor ámbito
        $usuario = 'root';
        $clave = '';
        $conn = new PDO('mysql:host=localhost;dbname=confirmacion',$usuario,$clave);
        
    }
    
    
?>