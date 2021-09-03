<!DOCTYPE html>
<?php
function FechaCompacta($fecha)
{
    return date("Y-m-d", $fecha);
}
function FechaCorto($fecha)
{
    $cad = FechaLarga($fecha);
    $cad = substr($cad, 7, 9) . "de " . date("Y", $fecha);
    return $cad;
}
function FechaLarga($fecha)
{
    //Quito, 3 de septiembre de 2021
    $cad = "Quito, ";
    $cad .= date("d", $fecha) . " de ";
    switch (date("m", $fecha)) {
        case 1:
            $cad .= "enero";
            # code...
            break;
        case 2:
            $cad .= "febrero";
            # code...
            break;
        case 3:
            $cad .= "marzo";
            # code...
            break;
        case 4:
            $cad .= "abril";
            # code...
            break;
        case 5:
            $cad .= "mayo";
            # code...
            break;
        case 6:
            $cad .= "junio";
            # code...
            break;
        case 7:
            $cad .= "agosto";
            # code...
            break;
        case 8:
            $cad .= "agosto";
            # code...
            break;
        case 9:
            $cad .= "septiembre";
            # code...
            break;
        case 10:
            $cad .= "octubre";
            # code...
            break;
        case 11:
            $cad .= "noviembre";
            # code...
            break;
        case 12:
            $cad .= "diciembre";
            # code...
            break;
        default:
            # code...
            break;
    }
    $cad .= "de " . date("Y", $fecha);
    return $cad;
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $fechaHoy = time();
    $fec = mktime(0, 0, 0, 6, 6, 2021);
    ?>

    Fecha de hoy en formato compacto: <?php echo (FechaCompacta($fechaHoy)) ?> <br>
    Fecha de hoy en formato compacto: <?php echo (FechaCorto($fechaHoy)) ?> <br>
    Fecha de hoy en formato compacto: <?php echo (FechaLarga($fechaHoy)) ?> <br>
    Fecha de hoy en formato compacto: <?php echo (FechaCompacta($fec)) ?> <br>
</body>

</html>