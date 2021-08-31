<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevas Variables</title>
</head>

<body>
    <?php
    echo ("Hola mundo <br>");
    $cad = "Cadena de caracteres";
    echo ("Variable \"" . $cad . "\" <br>");
    $cadenaDos = ("Emill el campeón");
    echo ("Esta es mi cadena: \"" . $cadenaDos . "\" <br>");
    //
    echo ("variable = $cad <br>"); //Se interpreta
    echo ('variable = $cad <br>'); //No Se interpreta
    // 
    echo ("Suma: (2+2) <br>");
    // 
    $entero = 5.24;
    if (is_int($entero)) {
        echo ("Entero si es una variable entera <br>");
    } else
        echo ("Entero no es una variable entera <br>");
    // 
    $booleano = 0;
    unset($booleano); // Eliminar de memoria 
    if (is_float($booleano)) {
        echo ("booleano si es una variable flotante <br>");
    } else
        echo ("bolleano no es una variable flotante <br>");
    $booleano = true;
    if (is_bool($booleano)) {
        echo ("$booleano si es una variable booleana <br>");
    } else
        echo ("$boleano no es una variable booleana <br>");

    $v1 = 0; // Esto no es una declaracion de una variable
    if (isset($v1))
        echo ("$v1 si ha sido declarado <br>");
    else
        echo ("$v1 no ha sido declarado <br>");

    //
    const CONSTANTE = 20; // Declaracion de una constante
    // otra manera-> define(Constante,20); 
    echo ("El valor de la constante es " . CONSTANTE . "<br>");



    ?>
</body>

</html>