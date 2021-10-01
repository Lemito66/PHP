<?php
    if (isset($_GET['tradicional']))
        $tradicional =$_GET['tradicional'];
    session_start();
    if (isset($_SESSION['VSesion']))
        $variableSesion =$_SESSION['VSesion'];
    if (isset($_COOKIE['VCookie']))
        $variableCookie = $_COOKIE['VCookie'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Página 3</h1>
    <hr>
    <form action="p2.php" method="post">
        <p>
            Tradicional:&nbsp; <?=$tradicional; ?>          
        
        </p>
        <p>
            Variable de sesión:&nbsp;   <?=$variableSesion; ?>        
        
        </p>
        <p>
            Cookie:&nbsp;    <?=$variableCookie; ?>       
        
        </p>
        <p>
            <a href="p1.php" target="_blank" rel="noopener noreferrer">Otra vez</a>
        </p>
    </form>
</body>
</html>