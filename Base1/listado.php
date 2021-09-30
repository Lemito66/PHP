<?php
require_once('funcione.php'); //Igual a include
$pagina = 0;
if (isset($_GET['pagina']))
    if ($_GET['pagina'] > 0)
        $pagina = $_GET['pagina'];
$inicio = $pagina * $MaxReg; //Número de la primera fila que se va a presentar (inicia en 0)
$PathImg="C:\xampp\htdocs\Programacion Avanzada\Base\imagenes";
Conectar(); //Se conecta con la base de datos
$sql = "SELECT Id, Nombre, Sueldo, Fecha, Masculino, Imagen FROM persona";
$cursor = $conn->prepare($sql);
$cursor->execute();
$resultado=$cursor ->fetchAll();
$totalRegistros = count($resultado);//Se obtiene el numero total de filas de la consulta
$cursor = null;
$totalPagina = ceil($totalRegistros/$MaxRed)-1;//Se calcula la cantidad de páginas que existirá
// echo($totalPagina);
// exit();
$sql ="Select Id, Nombre, Sueldo, Fecha, Masculino, Imagen FROM persona Order By Id Limit" . $inicio .", " . $MaxReg;
?>
<html>

<body>
    <font color="darkred" size="7"><b>Los datos de la tabla son:</b></font><br /><br />
    <a href="agregar.php">Agregar nueva persona</a><br /><br />
    <table border="1" bgColor="yellow">
        <tr>
            <td><b>
                
                    <font color="blue">Id</font><b></td>
            <td><b>
                    <font color="blue">Nombre</font><b></td>
            <td><b>
                    <font color="blue">Sueldo</font><b></td>
            <td><b>
                    <font color="blue">Fecha</font><b></td>
            <td><b>
                    <font color="blue">Masculino</font><b></td>
            <td><b>
                    <font color="blue">Imagen</font><b></td>
            <td><b>
                    <font color="blue">&nbsp;</font><b></td>
            <td><b>
                    <font color="blue">&nbsp;</font><b></td>
        </tr>
        <tr>
            <?php
            try {
                //echo ($sql);
                $cursor = $conn->query($sql);
                foreach ($cursor as $fila) {
            ?>
                    <tr>
                        <td><?php $fila["Id"]?></td>
                        <td><?php $fila["Nombre"]?></td>
                        <td><?php $fila["Sueldo"]?></td>
                        <td><?php 
                            if($fila["Fecha"])
                                echo ($fila["Fecha"]);
                            else
                                echo("&nbsp");
                                ?>></td>
                        <td><?php 
                            if($fila["Masculino"])
                                echo("Si");
                            else
                                echo("No");
                            ?></td>
                        <td><?php 
                                if($fila["Imagen"]){

                                }
                            ?></td>
                        <td>Actualizar</td>
                        <td>Eliminar</td>
                        <td></td>
                    </tr>
                    
                }
            <?php
                $cad= "<img src=\"" .$PathImg ."/" .$fila["Imagen"]."\">";
            ?>
                <td>
                    <font color="blue">25</font>
                </td>
                <td>
                    <font color="blue">Mena Juana</font>
                </td>
                <td>
                    <font color="blue">2000</font>
                </td>
                <td>
                    <font color="blue">1999-01-01</font>
                </td>
                <td>
                    <font color="blue">No</font>
                </td>
                <td>
                    <font color="blue">Imagen</font>
                </td>
                <td>
                    <a href="editar.php?id<?=$fila["Id"] ?> >
                    </a>
                    <font color="blue">Actualizar</font>
                </td>
                <td>
                    <font color="blue">Eliminar</font>
                </td>
        </tr>
        <?php
            } 
            catch (PDOException $e) {
                echo ("Error!, " . $e->getMessage() . "<br>");
            }
            $cursor = null;
            $conn = null;

        ?>
    <tr>
        <td colspan="4" align="center">
            <?php
                if ($pagina!=$totalPagina) {                    
                            
            ?>
                <a href="listado.php?pagina = <?php = $pagina-1?>" target="_blank" rel="noopener noreferrer">
                    Anteriores
                </a>
                
            <?php 
                }
                else {
                    echo("&nbsp");
                }
            ?>
        </td>
        <td colspan="4" align="center">
            Siguientes
        </td>
    </tr>
    
    </table>
</body>
<html>