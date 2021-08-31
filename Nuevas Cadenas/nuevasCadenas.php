<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadenas</title>
</head>

<body>
    <?php
    $cad1 = "Hola";
    $cad2 = "hola";
    if (strcmp($cad1, $cad2) == 0)
        echo ("$cad1 No es igual a $cad2 <br>");
    else
        echo ("$cad2 Si es igual a $cad2 <br>");
    // Devuelve <0 si strl es mejor que str2; >0 si strl es mayor que str2 y 0 si son iguales 
    if ($cad1 == $cad2)
        echo ("$cad1 Si es igual a $cad2 <br>");
    else
        echo ("$cad2 No es igual a $cad2 <br>");
    // == verifica contenidos
    // === verifica contenidos y tipo de datos
    echo ("La longitud de $cad1 = " . strlen($cad1) . "<br>");
    //
    $cad1 = "Cadena de caracteres de prueba";
    $cad2 = "de";
    echo (strtoupper($cad1) . "<br>"); //Mayusculas
    $num = strpos($cad1, $cad2); // Posisicion "de" en la cadena 2
    echo ("Posición = " . $num . "<br>");
    //
    $num = strpos($cad1, $cad2, 3); // Posisicion "de" en la cadena 7
    echo ("Posición = " . $num . "<br>");
    $num = strpos($cad1, $cad2, 30); // Posisicion "de" en la cadena 1
    echo ("Posición = " . $num . "<br>"); // Deja de ser númerico y pasa a ser falso 
    //
    if (!isset($num))
        echo ("$num no existe <br>");
    //
    if ($num == false)
        echo ("$num cambio a ser falso porque la cadena no se encuentra <br>");
    // 
    $cad2 = substr($cad1, 4, 7); // 7 caracteres desde la posiscion 4
    echo ("$cad2 <br>");
    //
    $cad2 = substr($cad1, 4); // lo que resta  desde la posiscion 4
    echo ("$cad2 <br>");
    //
    $cad2 = substr($cad1, 40); // Nuevamente pasa a ser falso
    echo ("$cad2 <br>");
    if ($cad2 == false)
        echo ("$cad2 cambio a ser falso porque la cadena no esta en limites lógicos <br>");

    $cad3 = "Naomi Falsa en las nubes";
    $cad5 = "a";
    $cade6 = strpos($cad3, $cad5);
    echo ($cade6 . "<br>");
    $cad4 = substr($cad3, 9, 5);
    echo ($cad4 . "<br>");
    //
    $cad2 = substr($cad1, -4);
    echo ("$cad2 <br>"); // Los 4 caracteres desde el final de la cadena

    // 
    $arr = explode(" ", $cad1); //Separa un arreglo
    foreach ($arr as $elemento)
        echo ($elemento . "<br>");
    $num = sizeof($arr); // tamaño del arreglo
    for ($i = 0; $i < $num; $i++) {
        echo ('$arr[' . $i . "]=" . $arr[$i] . "<br>");
    }
    //
    echo ($cad1[3] . "<br>"); // la "e"

    // 
    $cadenaNueva = "Ecuador el mejor del mundo";
    echo ($cadenaNueva . "<br>");
    $segundoArreglo = explode(" ", $cadenaNueva);

    foreach ($segundoArreglo as $nuevoElemento)
        echo ($nuevoElemento . "<br>");
    $ca = sizeof($segundoArreglo);
    for ($i = 0; $i < $ca; $i++) {
        echo ('$nuevoRecorrido [' . $i . "]=" . $segundoArreglo[$i] . "<br>");
        # code...
    }

    ?>


</body>

</html>