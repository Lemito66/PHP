<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Cookies</title>
</head>
<body>
    <h1>Página 1</h1>
    <hr>
    <form action="p2.php" method="post">
        <p>
            Tradicional:&nbsp;
            <input type="text" name="txtTradicional" id="" value="">
        
        </p>
        <p>
            Variable de sesión:&nbsp;
            <input type="text" name="txtSesion" id="" value="">
        
        </p>
        <p>
            Cookie:&nbsp;
            <input type="text" name="txtCookie" id="" value="">
        
        </p>
        <p>
            <input class="btn btn-success" type="submit" value="Ir a p2.php">
        </p>
        <?php
            $fecha =time();
            $fecha = date("d-m-y (H:i:s)");
            //echo(date("d-m-y (H:i:s)",$fecha). "<br>");
            echo ($fecha);
        ?>
    </form>
</body>
</html>