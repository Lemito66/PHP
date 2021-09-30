<?php
    include("funciones.php");
    $nombre; $sueldo; $fecha; $masculino;
    $imagen; $id;
    $id= $_GET["id"];
    $sql = "Select * FROM persona WHERE Id = ". $id;
    try {
        Conectar();
        $resultado = $conn ->query($sql);
        foreach ($resultado as $fila) {
            $nombre = $fila["Nombre"];
            $sueldo = $fila["Sueldo"];
            $fecha = $fila["Fecha"];
            $masculino = $fila["Masculino"];
            $imagen = $fila["Imagen"];
        }
        $resultado =null;
        $conn=null;
    } catch (PDOException $e) {
        echo("Error: " . $e -> getMessage(). "<br>");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <h1>Está seguro que desea eliminar este registro?</h1>
    <hr>
    <form action="procesar.php" method="post">
        Nombre: <?php $nombre ?><br>
        Sueldo:<?php $sueldo ?> <br>
        Fecha: <?php if (!empty($fecha)) { ?>
            Fecha: <?php $fecha ?> 
          
            <?php } ?>
         
                    
                ?><br>
        Sexo: <?php $nombre ?><br>
        Masculino: <?php $nombre ?><br>
        Imágen: <?php $nombre ?><br>
        <input type="submit" value="Si-Eliminar">
        &nbsp;&nbsp;&nbsp;
        <a href="listado.php">No-Cancelar</a>
       

    </form>
</body>

</html>