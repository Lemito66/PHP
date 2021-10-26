<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todos los modelos</title>
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


            <a href="../Modelo/ingresarModelo.php?marca= <?php echo $marca ?>&id=<?php echo $id ?>" class="btn btn-success">Ingresar modelo <?php echo $marca ?></a>

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
                    <th scope="col">Id</th>
                    <th scope="col">Modelo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Año</th>
                    <th scope="col">Acciones</th>
                    <?php

                        if (isset($_POST['eliminarButton'])) {
                            echo ('<th "scope="col">Seleccione</th>');
                            $_GET['mensaje3']==null;
                        }


                    ?>

                </tr>
            </thead>

            <tbody>
                <?php
                include('../funciones.php');
                Conectar();
                $sqlCompleto = ("SELECT ID_MODELO,NOMBRE_MODELO,PRECIO_MODELO,ANIO_MODELO FROM modelo WHERE ID_MARCA=" . $id);
                $cursor = $conn->query($sqlCompleto);
                foreach ($cursor as $registro) 
                {
                ?>
                    <tr>
                        <th scope="row"><? echo $registro["ID_MODELO"] ?></th>
                        <td> <?php echo $registro['NOMBRE_MODELO'] ?></td>


                        <td><? echo $registro["PRECIO_MODELO"] ?></td>

                        <td> <?php echo $registro['ANIO_MODELO'] ?></td>
                        <td>
                            <input type="button" class="btn btn-info" value="Editar">
                        </td>

                        <?php
                            if (isset($_POST['eliminarButton'])) {
                        ?>
                        <form action="../procesarModelo.php" method="POST">
                            
                            <td>
                        
                            <input type="checkbox" name="chequeo[]" value="<? echo $registro["ID_MODELO"] ?>">
                                                                                                                
                        <?php
                         } 
                        ?>
                        </tr>
                            
                <?php
                }?> 
                        
                     <tr>
                        <td></td>

                        <td></td>

                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <?php

                            if (isset($_POST['eliminarButton'])) {
                                ?>
                            
                                <input type="hidden" name="txtAccion" value="txtEliminar">
                                <input type="hidden" name="marca" value="<?php echo $marca ?>">
                                <input type="hidden" name="id" value="<?php echo  $id ?>">
                                <input type="hidden" name="origen" value="<?php echo $origen ?>">
                                <button  class="btn btn-outline-danger">Eliminar<br>seleccionados</button>
                             
                                <?php } ?>
                            </form>

                                
                        </td>

                </tr>
            </tbody>
        </table>

    </div>
 


</body>
</html>