<?php
    
    $marca=$_GET['marca'];
    $origen=$_GET['origen'];
    $modelo=$_GET['modelo'];
    $id=$_GET['id'];
    $pagina=$_GET['pagina'];

  
    $mensaje2=$_GET['mensaje2'];
    if(isset($_GET['mensaje2']))
    {
        echo ('<div class="alert alert-danger" role="alert">'.$mensaje2.
        
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
    <title>Ingresar modelo</title>
</head>
<body>
    <div style="margin:2%">

        <b>
            <h1 align="center" class="tituloPrincipal">
                    
                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>

        <b>
            <h4 class="subtitulo">Ingrese el nuevo modelo de <?php echo $marca ?></h4>
        </b>
        <br>

        <form action="../procesarModelo.php" method="post">

           <input type="hidden" name="id_marca" value="<?php echo $id ?>">
           <input type="hidden" name="NOMBRE_MARCA" value="<?php echo $marca ?>">
           <input type="hidden" name="ORIGEN_MARCA" value="<?php echo $origen ?>">
           <input type="hidden" name="pagina" value="<?php echo $pagina ?>">

            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Ingrese el modelo del vehículo</b>
                </div>
                <div class="col-lg-2">
                    <input type="text" name="nombre_modelo">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Ingrese el precio del vehiculo</b>
                </div>
                
                <div class="col-lg-2">
                    <input type="number" step="any" name="precio_modelo">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Ingrese el año del vehiculo</b>
                </div>
                
                <div class="col-lg-2">
                    <input type="number" name="anio_modelo">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-2">

                </div>
            </div>
            <input type="hidden" name="txtAccion" value="txtIngresar">
            <button class="btn btn-primary" >Ingresar Datos</button>
           
        </form>
                              
    </div>
    
</body>
</html>