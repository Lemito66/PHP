<?php
include("funciones.php");
$nombre;
$sueldo;
$fecha;
$masculino;
$imagen;
$id;
$anioActual;
$mes;
$dia;
$id = $_GET["id"];
$sql = "SELECT * FROM persona WHERE Id = " . $id;
try {
	Conectar();
	$resultado = $conn->query($sql);
	foreach ($resultado as $fila) {
		$nombre = $fila["Nombre"];
		$sueldo = $fila["Sueldo"];
		$fecha = $fila["Fecha"];
		$masculino = $fila["Masculino"];
		$imagen = $fila["Imagen"];
	}
	$resultado = null;
	$conn = null;
} catch (PDOException $e) {
	echo ("Error: " . $e->getMessage() . "<br/>");
}
?>
<html>

<body>
	<h1>Actualice la información del registro y presione aceptar</h1>
	<hr>
	<form action="procesar.php" method="post">
		Nombre: <input type="text" value="<? $nombre ?> " name="txtNombre" id=""> <br />
		Sueldo: <input type="text" name="txtSueldo" id="" value="<?= $sueldo ?> "> <br />


		<?php if (!empty($fecha)) { ?>
			Fecha:
			Año: &nbsp;<? //Año 
						?> &nbsp;Mes: <? //Mes 
												?>&nbsp; Día <?php //Mes
																	?>
			<br />
		<?php } ?>



		<input type="checkbox" name="chkMasculino" id="" value="1" <?php if ($masculino) {
																		echo ("Checked");
																	} ?>>
		<br />
		<?php if (!empty($imagen)) { ?>
			Imagen:
			<?php
			$cad = "<img src=\"" . $PathImg . "/" . $imagen . "\">";
			echo ($cad);
			?>
		<?php } ?>
		<br /><br />
		<input type="submit" value="Aceptar">
		&nbsp;&nbsp;&nbsp;
		<a href="listado.php">No-Cancelar</a>
		<input type="hidden" name="txtAccion" value="editar">
		<input type="hidden" name="txtId" value="<?php $id ?>">
	</form>
</body>

</html>