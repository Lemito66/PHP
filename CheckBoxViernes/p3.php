<!DOCTYPE html>
<?php
$n = $_POST("n");

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    La opciones seleccionadas fueron las siguientes <br>
    <?php
    for ($i = 0; $i < $n; $i++) {
        if (isset($_POST["chkOpcion" . $i])) {
            //echo("Existe" .$i . "<br>");
            echo ($_POST["chkOpcion" . $i] . "<br>");
        }
        /* if ($_POST["chkOpcion" . $i] != "") {
                # code...
                echo($_POST["chkOpcion". $i]. "<br>");
            } */
    }


    ?>
    <a href="checkBoxViernes.html" target="_blank" rel="noopener noreferrer">Otra vez</a>
    <!-- Escriba una pequeña página de login, donde se solicita usuario y contraseña,
    Se supone que el sistema acepta unos 4 usuarios validos con sus respectivas clases. Si el usuario/contraseña son correctos va a una página de "Bienvenida" y si hay un inconveniente, vuelve a la página de login indicando que no se pudo ingresar  -->
</body>

</html>