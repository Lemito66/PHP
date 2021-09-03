<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina de recibir</title>
</head>

<body>
    <?php
    if (!empty($_POST("texto"))) {
        $texto = $_POST("texto");
    } else {
        $texto = "Informacion Inconpleta";
    }
    $lista = $_POST("lista");
    $lista = $_POST("radio");
    $longitud = $_POST("longitudchk");
    $lista = $_POST("checkbox");


    ?>
    <h1>Resultados de la recuperación de datos</h1>
    <p>Cuadro de texto: <?php echo ($texto); ?></p>
    <p>Lista desplegable: <?php echo ($lista); ?></p>
    <p>Radio: <?php echo ($radio); ?></p>
    <p>
        Checkbox <br>
        <?php
            for ($i = 1; $i < $longitud; $i++) {
                $cad = "checkbox" . $i;
                if (isset($_POST($cad)))
                {
        ?>
                Checkbox<?php echo ($i); ?>
        <?php
                }
                else{
                    echo("No elegido: Checkbox");
                }
                echo ("<br>");
        }
        ?>
    </p>
    <p><a href="p1.html">Volver</a></p>
</body>

</html>