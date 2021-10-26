<?php
include('../funciones.php');

$buscador="ID_MODELO";
$forma="ASC";

if(isset($_GET['buscador']))
{
    $buscador=$_GET['buscador'];
    echo($buscador);
}
if(isset($_GET['forma']))
{
    $forma=$_GET['forma'];
    if($forma=="ASC")
    {
        $forma="DESC";
        

    }
    else
    {
        $forma="ASC";

    }
}


if(isset($_GET['marca']))
{
    $marca = $_GET['marca'];

}
if(isset($_GET['origen']))
{
    $origen = $_GET['origen'];

}

if(isset($_GET['id']))
{
    $id = $_GET['id'];

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
/*Mensaje3 para verificar que se editaron los datos seleccionados*/
if (isset($_GET['mensaje3'])) {
    $mensaje3 = $_GET['mensaje3'];
    echo ('<div class="alert alert-success" role="alert">' . $mensaje3 .

        '</div>');
}

$pagina =$_GET['pagina'];
//echo($pagina);
//exit();

$MaxReg = 2; //Máximo de registros por tabla
if (isset($_GET['pagina']))
    if ($_GET['pagina'] > 0)
        $pagina = $_GET['pagina'];
    
                
        //secho('Pagina='.$pagina."<br>");
$inicio = $pagina * $MaxReg;

Conectar();
$sqlCompleto = ("SELECT COUNT(*) FROM modelo WHERE ID_MARCA=".$id);
$cursor = $conn->query($sqlCompleto);
$totalRegistros = $cursor->fetchColumn();

$totalPaginas = ceil($totalRegistros / $MaxReg) - 1;
//echo($totalPaginas."<br>");
//echo("Total registros=".$totalRegistros);
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
    <title>Vista modelos</title>
</head>

<body>
    <div style="margin:2%">
        <b>
            <h1 align="center" class="tituloPrincipal">

                COMPANÍA AUTOMOTRÍZ

            </h1>
        </b>

        <b>
            <h4 align="Left" class="subtitulo">Marca: <span class="tituloPrincipal"> <?php echo $marca ?></span></h4>
            <h4 align="Left" class="subtitulo">Origen: <span class="tituloPrincipal"> <?php echo $origen ?></span></h4>

        </b>
        &nbsp;
        &nbsp;

        <div class="btn-toolbar">


            <a href="../Modelo/ingresarModelo.php?marca= <?php echo $marca ?>&id=<?php echo $id ?>&origen=<?php echo $origen ?>&pagina=<?php echo $pagina?>"" class="btn btn-success">Ingresar modelo <?php echo $marca ?></a>

            &nbsp;
            &nbsp;
            <form method="post">
                <button class="btn btn-danger" name="eliminarButton">Eliminar modelo</button>
            </form>


        </div>

        &nbsp;


        <table class="table">
            <thead>
               
                <tr>
                    <th scope="col">
                        <a href="vistaModelo.php?marca=<?php echo $marca?>&origen=<?php echo $origen?>&id=<?php echo $id ?>&pagina=<?php echo $pagina?>&forma=<?php echo $forma?>&buscador=ID_MODELO">
                        Id
                        </a>
                    </th>
                    <th scope="col">
                    <a href="vistaModelo.php?marca=<?php echo $marca?>&origen=<?php echo $origen?>&id=<?php echo $id ?>&pagina=<?php echo $pagina?>&forma=<?php echo $forma?>&buscador=NOMBRE_MODELO">
                     Modelo
                    </th>
                    <th scope="col">
                        
                    <a href="vistaModelo.php?marca=<?php echo $marca?>&origen=<?php echo $origen?>&id=<?php echo $id ?>&pagina=<?php echo $pagina?>&forma=<?php echo $forma?>&buscador=PRECIO_MODELO">
                        Precio
                    </th>
                    <th scope="col">Año</th>
                    <th scope="col">Acciones</th>
                    <?php

                    if (isset($_POST['eliminarButton'])) {
                        echo ('<th "scope="col">Seleccione</th>');
                    }


                    ?>

                </tr>
            </thead>

            <tbody>
                <?php
                //include('../funciones.php');
                Conectar();
                $sqlCompleto = ("SELECT ID_MODELO,NOMBRE_MODELO,PRECIO_MODELO,ANIO_MODELO FROM modelo WHERE ID_MARCA= " . $id . " ORDER BY ".$buscador." ".$forma." LIMIT " . $inicio . "," . $MaxReg);
                //echo ($sqlCompleto);
                //exit();
                $cursor = $conn->query($sqlCompleto);
                foreach ($cursor as $registro) {
                ?>
                    <tr>
                        <th scope="row"><? echo $registro["ID_MODELO"] ?></th>
                        <td> <?php echo $registro['NOMBRE_MODELO'] ?></td>


                        <td><? echo $registro["PRECIO_MODELO"] ?></td>

                        <td> <?php echo $registro['ANIO_MODELO'] ?></td>

                        <td>
                            <form action="../Modelo/editarModelo.php" method="get">
                                <input type="hidden" name="NOMBRE_MARCA" value="<?php echo $marca ?>">
                                <input type="hidden" name="ID_MODELO" value="<?php echo $registro['ID_MODELO'] ?>">
                                <input type="hidden" name="ID_MARCA" value="<?php echo  $id ?>">
                                <input type="hidden" name="ORIGEN_MARCA" value="<?php echo $origen ?>">
         
                                <button class="btn btn-info">Editar</button>
                            </form>
                        </td>



                        <?php
                        if (isset($_POST['eliminarButton'])) {
                        ?>

                            <form action="../procesarModelo.php" method="POST">
                                <td>


                                    <input type="checkbox" name="chequeo[]" value="<? echo $registro["ID_MODELO"] ?>">

                                    <input type="hidden" name="txtAccion" value="txtEliminar">
                                    <input type="hidden" name="NOMBRE_MARCA" value="<?php echo $marca ?>">
                                    <input type="hidden" name="ID_MARCA" value="<?php echo  $id ?>">
                                    <input type="hidden" name="ORIGEN_MARCA" value="<?php echo $origen ?>">



                                    <button class="btn btn-outline-danger">Eliminar<br>seleccionados</button>
                            </form>
                            </td>


                        <?php
                        }
                        ?>
                    </tr>

                <?php
                } ?>
                                              
            </tbody>
        </table>
        <div align="center">
        <tr>

<?php

    for($i=0;$i<$totalPaginas+1;$i++)
    {


        if($pagina==$i)
        {?>

                <a>
                <?php echo $i+1 ?></a> &nbsp;
                <?php
        }
        
        else
        {
        ?>
                               
            <a href="vistaModelo.php?marca=<?php echo $marca ?>&origen=<?php echo $origen ?>&id=<?php echo $id ?>&pagina=<?php echo $i ?>"><?php echo $i+1 ?> </a>&nbsp;
            
        <?php
        } /*Fin del else*/
        ?>
    <?php
    }
    
     /*Fin del for*/
    ?>
                                                                                                                                                                                                                                     
</tr>
    </div>
    <?php
    if($totalPaginas>0)
    {?>
    <br>
    <div align="left">
        Pagina <?= $pagina + 1 ?> de <?= $totalPaginas + 1 ?>
    </div>
                                     
    
    <?php
    }?>


</body>
</html>