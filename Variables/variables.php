<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variables Php</title>
</head>

<body>
    <?php
    echo ("Hola mamá <br>");
    $cad = "Cadena de caracteres";
    echo ("variable = \"" . $cad . "\" <br>");
    echo ("variable = $cad <br>"); // Se interpreta la variable
    echo ('variable = $cad <br>'); // No interpreta la variable
    echo ("Suma: (2+2) <br>");
    $entero = 5.21;
    if (is_int($entero)) {
        # code...
        echo ("$entero si es una variable entera <br>");
    } else {
        echo ("$entero No es una variable entera <br>");
    }
    $booleano = 0; // Declaras variable
    unset($booleano); // Quitar variable
    if (is_float($booleano)) {
        # code...
        echo ("$booleano si es una variable flotante <br>");
    } else {
        echo ("$booleano No es una variable flotante <br>");
    }
    $nuevoBool = true;
    if (is_bool($nuevoBool)) {
        # code...
        echo ("$nuevoBool si es una variable booleana <br>");
    } else {
        echo ("$nuevoBool No es una variable booleana <br>");
    }
    $v1; //Esto no es una declaracion de una variables
    if (isset($v1)) {
        echo ("$v1 si ha sido declarado <br>");
    } else {
        echo ("$v1 no ha sido declarado <br>");
    }
    const Constante = 20;   //Declaras constantes no se necesita el signo de dolar y por lo general va con mayuscula

    //Define (Constante, 20); // Otra forma de declarar
    echo ("El valor de la constante es:  " . Constante . " <br>");
    $cadena2 = substr($cadena1, 4, 7);// 7 caracteres desde la posicion 4
    echo ("$cadena2 <br> ");
    $cadena2 = substr($cadena1, 4);//lo que resta desde la posicion 4
    echo ("$cadena2 <br> ");
    $cadena2 = substr($cadena1,40);
    echo ("$cadena2 <br> ");// datos que se salen de los limites
    echo("$cadena2 <br>"); //Nuevamente pasa a ser falso 
    if ($cadena2 == false) {
        echo("$cad2 cambio a ser falso porque no esta en limites lógicos <br>");      
    }
    $cad2== substr($cadena1, -4); // 4 caracteres desde el final de la cadena
    echo("$cad2 <br>")
    
    $arr = explode("", $cadena1); //Separa un arreglo
    foreach ($arr as $elemento){
        echo($elemento . "<br>");
        
    }
    $num = sizeof($arr);//Tamaño del arreglo
    for ($i=0; $i < $num ; $i++) { 
        echo('$arr')
    }

    ?>
</body>

</html>