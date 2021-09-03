<?php
if (!empty($_POST['usuario']) && !empty($_POST['contrasena'])) {
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena'];
    if ($usuario == "usuario" && $contrasena == "123") {
        echo ("Bienvenido");
    } else
        header("Location: login.php");
} else {    
    header("Location: login.php");
}
