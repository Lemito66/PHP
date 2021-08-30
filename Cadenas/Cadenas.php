<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Cadenas</title>
</head>

<body>
    <?php
    //Manejo de cadenas
    $cadena1 = "Hola";
    $cadena2 = "hola";
    /* if (strcmp($cadena1, $cadena2) != 0) {
        echo ("$cadena1 No es igual a $cadena2 <br>");
    } */
    //otra forma
    if (strcmp($cadena1, $cadena2) == 0) {
        echo ("$cadena1 Si es igual a $cadena2 <br>");
    } else
        echo ("$cadena1 No es igual a $cadena2 <br>");

    //Devuleve <0 si strl es menor que str2; >0 si strl es mator que str2 y 0 si son iguales 
    if ($cadena1 === $cadena2) {
        echo ("$cadena1 Si es igual a $cadena2 <br>");
    } else {
        echo ("$cadena1 No es igual a $cadena2 <br>");
    }
    // == Verifica Contenidos
    //=== Verifica contenidos y tipo de datos

    echo ("La longitud de $cadena1 = " . strlen($cadena1) . "<br>"); // Saber longitud de cadena
    $cadena1 = "Cadena de caracteres de prueba";
    $cadena2 = "de";
    echo (strtoupper($cadena1) . "<br>");
    $num = strpos($cadena1, $cadena2);
    echo ("Posicion = " . $num . "<br>"); //2
    $num = strpos($cadena1, $cadena2, 3);
    echo ("Posicion = " . $num . "<br>"); //7
    $num = strpos($cadena1, $cadena2, 30);
    echo ("Posicion = " . $num . "<br>"); //No existe ese dato
    if (!isset($num)) {
        echo ('$num no existe');
    }
    if ($num == false) {
        echo ('$num cambio a ser falso porque la cadena no se encuentra');
    }


    ?>
</body>

</html>