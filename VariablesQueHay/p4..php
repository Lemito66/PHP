<?php
if (isset($_GET["tradicional"])) {
    $tradicional = $_GET("tradicional");
}
session_start();
if (isset($_SESSION["VSesion"]))
    $variableSesion = $_SESSION["VSesion"];
if (isset($_COOKIE["VCookie"]))
    $variableCookies = $_COOKIE["VCookie"];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Página 3</h1>
    <hr />
    <p>
        Tradicional: <? $tradicional ?>
    </p>
    <p>
        Variable de sesión <? $variableSesion ?>
    </p>
    <p>
        Cookie <? $variableCookies ?>
    </p>
    <a href="p4.php"> Ir a página 5</a>
</body>

</html>