<?php

$buscador = "ID_MARCA";
$forma = "ASC";
if (isset($_GET['buscador'])) {
    $buscador = $_GET['buscador'];
    echo ($buscador);
}
if (isset($_GET['forma'])) {
    $forma = $_GET['forma'];
    if ($forma == "ASC") {
        $forma = "DESC";
        //echo("cambio1");

    } else {
        $forma = "ASC";
    }
}


if (isset($_GET['mensaje1'])) {
    $mensaje1 = $_GET['mensaje1'];

    echo ('<div class="alert alert-success" role="alert">' . $mensaje1 .

        '</div>');
}
if (isset($_GET['mensaje2'])) {
    $mensaje2 = $_GET['mensaje2'];

    echo ('<div class="alert alert-danger" role="alert">' . $mensaje2 .

        '</div>');
}
$pagina2 = 0;


$MaxReg = 10; //Máximo de registros por tabla

if (isset($_GET['pagina2']))
    if ($_GET['pagina2'] > 0)
        $pagina2 = $_GET['pagina2'];


//secho('pagina2='.$pagina2."<br>");
$inicio = $pagina2 * $MaxReg;
include('funciones.php');
Conectar();
$sqlCompleto = ("SELECT COUNT(*) FROM marca");
$cursor = $conn->query($sqlCompleto);
$totalRegistros = $cursor->fetchColumn();

$totalPaginas = ceil($totalRegistros / $MaxReg) - 1;

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
    <link rel="stylesheet" href="estilos.css">

    <title>Principal</title>
</head>

<body>
    <div style="margin:2%">

        <b>
            <h1 align="center" class="tituloPrincipal">

                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>

        <b>
            <h4 align="Left" class="subtitulo">Marcas de autos disponibles</h4>

        </b>

        <div class="btn-toolbar">


            <a href="Marca/ingresarMarca.php?pagina2=<?php echo $pagina2 ?>" class="btn btn-success">Ingresar una nueva marca</a>
            &nbsp;
            &nbsp;
            <form method="post">
                <button class="btn btn-danger" name="eliminarButton">Eliminar marca</button>
            </form>
            &nbsp;
            &nbsp;

            <?php

            ?>


        </div>
        &nbsp;

        <?php

        //include('funciones.php');
        /*foreach para actualizar la cantidad de modelos de cada marca*/
        Conectar();
        $sqlActualizar = "SELECT ID_MARCA,NOMBRE_MARCA,ORIGEN_MARCA,CANTIDAD_MARCA FROM marca ";
        $cursor1 = $conn->prepare($sqlActualizar);
        $cursor1->execute();
        $resultado1 = $cursor1->fetchAll();
        foreach ($resultado1 as $resultado1) {
            $id_marca = $resultado1['ID_MARCA'];
            //Conectar();
            $sqlCompleto = ("SELECT COUNT(*) FROM modelo WHERE ID_MARCA=" . $id_marca);
            $cursor = $conn->query($sqlCompleto);
            $totalRegistros = $cursor->fetchColumn();
            $sqlCompleto = "";
            $sqlCompleto = "UPDATE marca SET CANTIDAD_MARCA=" . $totalRegistros . " WHERE ID_MARCA=" . $id_marca;
            $cursor = $conn->Prepare($sqlCompleto);
            $cursor->execute();
            $cursor = "";
            $resultado = "";
        }


        Conectar(); //se conecta con la base de datos
        $sqlCompleto = "SELECT ID_MARCA,NOMBRE_MARCA,ORIGEN_MARCA,CANTIDAD_MARCA FROM marca" . " ORDER BY " . $buscador . " " . $forma . " LIMIT " . $inicio . "," . $MaxReg;
        $cursor = $conn->prepare($sqlCompleto);
        //echo ($sqlCompleto);
        //echo($forma);
        //exit();
        $cursor->execute();
        $resultado = $cursor->fetchAll();

        ?>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">
                        <a href="Principal.php?pagina2=<?php echo $pagina2 ?>&buscador=ID_MARCA&forma=<?php echo $forma ?>">
                            Id
                        </a>
                    </th>
                    <th scope="col">
                        <a href="Principal.php?pagina2=<?php echo $pagina2 ?>&buscador=NOMBRE_MARCA&forma=<?php echo $forma ?>">
                            Marca
                        </a>
                    </th>
                    <th scope="col">
                        <a href="Principal.php?pagina2=<?php echo $pagina2 ?>&buscador=ORIGEN_MARCA&forma=<?php echo $forma ?>">
                            Origen
                        </a>

                    </th>
                    <th scope="col">Cantidad</th>
                    <th scope="col">Acciones</th>
                    <?php
                    if (isset($_POST['eliminarButton'])) { ?>
                        <th scope="col">Seleccione</th>
                    <?php
                    }
                    ?>



                </tr>


            </thead>
            <tbody>
                <?php
                $cursor = $conn->query($sqlCompleto);
                foreach ($cursor as $registro) {
                ?>
                    <tr>
                        <th scope="row"><? echo $registro["ID_MARCA"] ?></th>
                        <td>
                            <a href="Modelo/vistaModelo.php?marca=<?php echo ($registro["NOMBRE_MARCA"]) ?>&origen=<?php echo ($registro["ORIGEN_MARCA"]) ?>&id=<?php echo ($registro["ID_MARCA"]) ?>&pagina=0">
                                <?php echo ($registro["NOMBRE_MARCA"]) ?>
                            </a>
                        </td>


                        <td><? echo $registro["ORIGEN_MARCA"] ?></td>

                        <td><? echo $registro["CANTIDAD_MARCA"] ?></td>

                        <td>

                            <form action="Marca/editarMarca.php" method="get">

                                <input type="hidden" name="NOMBRE_MARCA" value="<?php echo $registro["NOMBRE_MARCA"] ?>">

                                <input type="hidden" name="ID_MARCA" value="<?php echo  $registro["ID_MARCA"] ?>">
                                <input type="hidden" name="ORIGEN_MARCA" value="<?php echo  $registro["ORIGEN_MARCA"] ?>">
                                <input type="hidden" name="pagina2" value="<?php echo $pagina2 ?>">

                                <button class="btn btn-info">Editar</button>
                            </form>
                        </td>


                        <?php
                        if (isset($_POST['eliminarButton'])) {
                        ?>

                            <form action="Marca/procesarMarca.php" method="POST" onsubmit="return confirmation()">
                                <td>


                                    <input type="checkbox" name="chequeo[]" value="<? echo $registro["ID_MARCA"] ?>">

                                    <input type="hidden" name="txtAccion" value="txtEliminar">

                                    <input type="hidden" name="NOMBRE_MARCA" value="<?php echo $registro["NOMBRE_MARCA"] ?>">
                                    <input type="hidden" name="ID_MARCA" value="<?php echo  $registro["ID_MARCA"] ?>">
                                    <input type="hidden" name="ORIGEN_MARCA" value="<?php echo $registro["ORIGEN_MARCA"] ?>">
                                    <input type="hidden" name="pagina2" value="<?php echo $pagina2 ?>">


                                    <button class="btn btn-outline-danger">Eliminar<br>seleccionados</button>
                            </form>
                            <script type="text/javascript">
                                function confirmation() {

                                    if (confirm()) {
                                        return true;
                                    } else {
                                        return false;
                                    }
                                }
                            </script>
                            </td>




                        <?php
                        }
                        ?>
                    </tr>
                <?php
                }
                ?>

            </tbody>
        </table>

    </div>
    <?php
    if (isset($_POST['confirmarEliminar'])) { ?>
        <p>dasdasd</p>
    <?php
    } ?>
    <div align="center">
        <tr>

            <?php

            for ($i = 0; $i < $totalPaginas + 1; $i++) {


                if ($pagina2 == $i) { ?>

                    <a>
                        <?php echo $i + 1 ?></a> &nbsp;
                <?php
                } else {
                ?>

                    <a href="principal.php?pagina2=<?php echo $i ?>">
                        <?php echo $i + 1 ?>
                    </a>&nbsp;

                <?php
                } /*Fin del else*/
                ?>
            <?php
            }

            /*Fin del for*/
            ?>

        </tr>
    </div>
</body>

</html>