<?php
    //Recuperación por POST, las 3 son tradicionales
    $tradicional =$_POST['txtTradicional'];
    $sesion =$_POST['txtSesion'];
    $cookie =$_POST['txtCookie'];

    //Variable de sesión
    session_start();//Siempre se debe utilizar para trabajar con variables de sesión
    $_SESSION["VSesion"]=$sesion;//Durará 24 minutos desde este instante 1440 segundos
    //Cookie
    setcookie("VCookie", $cookie, time()+ (60*60*24*365));// Segundos,minutos, horas, dias

    //Envio de la Variable tradicional a la tercera página
    header("location:p3.php?tradicional=".$tradicional);


?>