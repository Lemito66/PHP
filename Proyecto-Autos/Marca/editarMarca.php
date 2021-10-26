<?php
    if (isset($_GET['mensaje2']))
    {
        $mensaje2 = $_GET['mensaje2']; 

        echo ('<div class="alert alert-danger" role="alert">' . $mensaje2 .

            '</div>');
    }
    $id_marca=$_GET['ID_MARCA'];
    $nombre_marca=$_GET['NOMBRE_MARCA'];
    $origen_marca=$_GET['ORIGEN_MARCA'];
    $pagina2=$_GET['pagina2'];

    //echo($id_marca."<br>");
    //echo($nombre_marca."<br>");
    //echo($origen_marca."<br>");
    //echo($pagina2."<br>");
    //exit();
    
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
    
    <title>Editar Marca</title>

</head>
<body>
    <div style="margin:2%">
            
        <b>
            <h1 align="center" class="tituloPrincipal">
                
                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>
            
        <b>
            <h4 align="Left" class="subtitulo">Edición de marcas</h4>
                
        </b>
        <br>
        <?php

            include('../funciones.php');
            Conectar();
            $sqlCompleto = ("SELECT NOMBRE_MARCA,ORIGEN_MARCA FROM marca WHERE ID_MARCA=".$id_marca);
            $cursor = $conn->query($sqlCompleto);                                    
        ?>

        <form action="procesarMarca.php" method="POST">
            <div class="container-fluid">

                <?php
                    foreach($cursor as $cursor)
                    {
                ?>

            <div class="row">
                    <div class="col-lg-2">
                        <b><label for=""></label>Nombre de la marca</b>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" name="NOMBRE_MARCA" value="<?php echo $cursor['NOMBRE_MARCA']?>">
                    </div>
            </div>
            <br>
            <div class="row">
                    <div class="col-lg-2">
                        <b><label for=""></label>Origen de la marca</b>
                    </div>
                    <div class="col-lg-2">
                        <input type="text" name="ORIGEN_MARCA" value="<?php echo $cursor['ORIGEN_MARCA']?>">
                    </div>
            </div>

                <input type="hidden" name="pagina2" value="<?php echo $pagina2?>">
                <input type="hidden" name="ID_MARCA" value="<?php echo $id_marca?>">
                <input type="hidden" name="txtAccion" value="txtEditar">
                <br>
                <button class="btn btn-success" >Actualizar datos</button>

            </div>
    
    
    
        </form>
        
        <?php
                }    
        ?>

    </div>

                                                                                                                                                                   
</body>
</html>

