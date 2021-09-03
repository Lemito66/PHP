<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de Fechas</title>
</head>

<body>
    <?php
    $ahora = time(); //Hora GMT media en segundos desde 1970-1-1
    echo ($ahora . "<br>");
    $fecha = date("Y-M-D (H:i:s) l", $ahora);
    echo ($fecha . "<br>");
    $fc = mktime(18, 55, 30, 2, 30, 2010); // Asigna a $fc la fecha correspondiente a hora,min,seg,mes,dia,año. Cuando hay errores de fecha, busca los valores correspondientes a fechas correctas 
    echo (date("Y-m-d (H:i:s)", $fc) . "<br>");

    /*
    d-> Dia del mes con 2 digitos 
    D-> Texto de 3 letras del día en ingles 
    j-> Día del mes con 1 dígito
    l->Texto del día en ingles
    N-> Representacion numerica del día de la semana (1 Lunes - 7 Domingo)
    w->Representacion númerica del día de la semana (0 Domingo - 6 Sábado)
    z->Día del año (0-365)
     */
    ?>
</body>

</html>