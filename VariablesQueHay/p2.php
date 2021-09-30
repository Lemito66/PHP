<?php
//Recuperacion por Post, las 3 son tradicionales
$tradicional = $_POST("txtTradicional");
$sesion = $_POST("txtsesion");
$cookie = $_POST("txtcookie");
//Variable de sesion
session_start(); //Para indicar que se va a trabajr con variables se sesion 
$_SESSION["Vsesion"] = $sesion; //Dura 24 minutos 

//Cookie
setcookie("VCookie", $cookie, time(60 * 60 * 24 * 365)); //Durara 1 años a partir de su creacion 

//Envio de la variable tradicional a la tercera página
header("location:p3.php?tradicional =" . $tradicional);
