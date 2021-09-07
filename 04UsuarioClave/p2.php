<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="p3.php" method="post">
        <?php
        echo ("BIENVENIDO <br>". $_GET['name']);
        ?>
        <a href="p1.php">Cerrar Sesion</a>
    </form>
</body>

</html>