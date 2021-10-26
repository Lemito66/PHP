<?php

 $nombre_marca=$_GET['NOMBRE_MARCA'];
 $id_marca=$_GET['ID_MARCA'];
 $id_modelo=$_GET['ID_MODELO'];
 $origen_marca=$_GET['ORIGEN_MARCA'];

 if (isset($_GET['mensaje2'])) {
    $mensaje2 = $_GET['mensaje2'];
    echo ('<div class="alert alert-danger" role="alert">' . $mensaje2 .

        '</div>');
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="../estilos.css">
    
    <title>Editar modelo</title>
</head>
<body>
    <div style="margin:2%">
            
        <b>
            <h1 align="center" class="tituloPrincipal">
                
                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>
            
        <b>
            <h4 align="Left" class="subtitulo">Edición de modelos</h4>
                
        </b>
        <br>
        <?php

            include('../funciones.php');
            Conectar();
            $sqlCompleto = ("SELECT NOMBRE_MODELO,PRECIO_MODELO,ANIO_MODELO FROM modelo WHERE ID_MODELO=" . $id_modelo);
            $cursor = $conn->query($sqlCompleto);                                    
        ?>

        <form action="../procesarModelo.php" method="POST">
        <div class="container-fluid">

            <?php
                foreach($cursor as $cursor)
                {
            ?>

           <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Modelo del vehículo</b>
                </div>
                <div class="col-lg-2">
                    <input type="text" name="nombre_modelo" value="<?php echo $cursor['NOMBRE_MODELO']?>">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Precio del vehículo</b>
                </div>
                <div class="col-lg-2">
                    <input type="text" name="precio_modelo" value="<?php echo $cursor['PRECIO_MODELO']?>">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Año del vehículo</b>
                </div>
                <div class="col-lg-2">
                    <input type="text" name="anio_modelo" value="<?php echo $cursor['ANIO_MODELO']?>">
                </div>
            </div>
            <input type="hidden" name="id_modelo" value="<?php echo $id_modelo?>">
            <input type="hidden" name="marca" value="<?php echo $nombre_marca?>">            
            <input type="hidden" name="id" value="<?php echo $id_marca?>">
            <input type="hidden" name="origen" value="<?php echo $origen_marca?>">
            <input type="hidden" name="txtAccion" value="txtEditar">
            <br>
            <button class="btn btn-success" >Actualizar Datos datos</button>

        </div>
    
    
    
        </form>
        
        <?php
                }    
        ?>

    </div>

                   
     

        
                                                                                                      
            
                 
</body>
</html>

