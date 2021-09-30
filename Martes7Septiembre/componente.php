<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
//Devuelve el html de un select con valores númericos generados entre $ini y $fin, cuyo nombres $nombre y cuyo seccionado es $elegido
function GenerarSelNum($num, $ini, $fin, $elegido)
{
    $cad = "<select name=\"$nombre\">";
    for ($i = $ini; $i < $fin; $i++) {
        $cad .= "<option value=\"$i\"";
        if ($i == $elegido) {
            $cad .= " selected"; // Dejar un espacio
            $cad .= ">$i </option>\n";
        }
        $cad .= ">$i</option>";
    }
    $cad .= "</select>";
    return $cad;
}
//Devuelve el html de un select para la creacion de meses.
//$nombre es el nombre del select, $ekegudi es el mes elegido
function GenerarMes($nombre, $elegido)
{
    $mes[1] = 'Enero';
    $mes[2] = 'Febrero';
    $mes[3] = 'Marzo';
    $mes[4] = 'Abril';
    $mes[5] = 'Mayo';
    $mes[6] = 'Junio';
    $mes[7] = 'Julio';
    $mes[8] = 'Agosto';
    $mes[9] = 'Septiembre';
    $mes[10] = 'Octubre';
    $mes[11] = 'Noviembre';
    $mes[12] = 'Diciembre';
    $cad = "<select name=\"$nombre\">\n";
    for ($i = 1; $i <= 12; $i++) {
        $cad .= "<option value=\"$i\"";
        if ($i == $elegido)
            $cad .= " selected";
        $cad .= ">$mes[$i]</option>";
    }
    $cad .= "</select>\n";
    return ($cad);
}

//Genere un componente de fecha con listas desplegables para año, mes y dia
//$rango es el número de años antes y despues del año elegido.
//Devuelve el html del componente
function GenerarAnioFecha($anio, $mes, $dia, $rango)
{
    $ini = 0;
    $fin = 0; //Valores iniciales y final de los selects númericos
    $cad = "";
    $cad = "Dia";
    $cad .= GenerarSelNum("SelecDia", 1, 31, $dia);
    $cad .= "Mes";
    $cad .= GenerarMes("SelecMes", $mes);
    $cad .= "Año";
    $ini = $anio - $rango;
    $fin = $anio + $rango;
    $cad .=  GenerarSelNum("SelecAnio", 1, 31, $dia);
    return $cad;
}



?>

<body>
    <h1>Componente dinámico</h1>

    <?php
    //echo (GenerarSelNum("SelectorDias", 1, 30, 7));
    echo (GenerarMes("SelectorMes", 5));
    //echo(GenerarAnioFecha(2021,9,7,50));

    ?>
</body>

</html>