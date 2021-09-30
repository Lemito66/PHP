<?php
include("funciones.php");
$nombre; $sueldo; $fecha; $masculino; $imagen; $id;
$id = $_GET["id"];
$sql = "SELECT * FROM persona WHERE Id = ".$id;
try
{
	Conectar();
	$resultado = $conn->query($sql);
	foreach($resultado as $fila)
	{
		$nombre = $fila["Nombre"];
		$sueldo = $fila["Sueldo"];
		$fecha = $fila["Fecha"];
		$masculino = $fila["Masculino"];
		$imagen = $fila["Imagen"];
	}
	$resultado = null;
	$conn = null;
}
catch(PDOException $e)
{
	echo("Error: ".$e->getMessage()."<br/>");
}
?>
<html> 
	<body>
	<h1>Está seguro de que desea eliminar este registro?</h1>
	<hr>
	<form action="procesar.php" method="post">
	Nombre: <?= $nombre ?><br/>
	Sueldo: <?= $sueldo ?><br/>
	<?php if(!empty($fecha)) { ?>
		Fecha: <?= $fecha ?><br/>
	<?php } ?>
	Masculino: 
	<?php 
		if($masculino) 
			echo("Si");
		else
			echo("No");
	?>
	<br/>
	<?php if(!empty($imagen)) { ?>
		Imagen: 
		<?php
			$cad = "<img src=\"".$PathImg."/".$imagen."\">";
			echo($cad);
		?>
	<?php } ?>
	<br/><br/>
	<input type="submit" value="Si-Eliminar">
	&nbsp;&nbsp;&nbsp;
	<a href="listado.php">No-Cancelar</a>
	<input type="hidden" name="txtAccion" value="eliminar">
	<input type="hidden" name="txtId" value="<?php $id ?>">
	</form>
	</body>
</html>