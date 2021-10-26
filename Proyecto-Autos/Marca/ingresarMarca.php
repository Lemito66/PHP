<?php

$mensaje2 = $_GET['mensaje2'];
if (isset($_GET['mensaje2'])) {
    echo ('<div class="alert alert-danger" role="alert">' . $mensaje2 .

        '</div>');
}

if(isset($_GET['pagina2']))
{
    $pagina2=$_GET['pagina2'];

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
    <title>Ingresa Marca</title>
</head>

<body>
    <div style="margin:2%">

        <b>
            <h1 align="center" class="tituloPrincipal">

                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>

        <b>
            <h4 class="subtitulo">Ingrese una nueva marca de vehículos</h4>
        </b>
        
        <br>

        <form action="../Marca/procesarMarca.php" method="post">
            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Ingrese la marca del vehículo</b>
                </div>
                <div class="col-lg-2">
                    <input type="text" name="NOMBRE_MARCA">
                </div>
            </div>

            <br>

            <div class="row">
                <div class="col-lg-2">
                    <b><label for=""></label>Ingrese el origen de la marca</b>
                </div>

                <div class="col-lg-2">
                    <input type="text" name="ORIGEN_MARCA">
                </div>
            </div>

            <br>

            <input type="hidden" name="PAGINA2" value="<?php echo $pagina2?>">
            <input type="hidden" name="txtAccion" value="txtIngresar">
            <button class="btn btn-primary" name="Aceptar">Ingresar Datos</button>

        </form>

    </div>

</body>

</html>