<?php
require_once('funciones.php'); //Igual a include
$pagina = 0;
if (isset($_GET['pagina']))
	if ($_GET['pagina'] > 0)
		$pagina = $_GET['pagina'];
$inicio = $pagina * $MaxReg; //Número de la primera fila que se va a presentar (inicia en 0)

Conectar(); //Se conecta con la base de datos
$sqlCompleto = "SELECT Id, Nombre, Sueldo, Fecha, Masculino, Imagen FROM persona";
$cursor = $conn->prepare($sqlCompleto);
$cursor->execute();
$resultado = $cursor->fetchAll();
$totalRegistros = count($resultado); //Se obtiene el número total de filas de la consulta
$cursor = null;
$totalPaginas = ceil($totalRegistros / $MaxReg) - 1; //Se calcula la cantidad de páginas que existirá
//echo($totalRegistros);
//exit;

$sql = "SELECT Id, Nombre, Sueldo, Fecha, Masculino, Imagen FROM persona ORDER BY Id LIMIT " . $inicio . ", " . $MaxReg;
//echo($sql);
//exit;

?>
<html>

<body>
	<font color="darkred" size="7"><b>Los datos de la tabla son:</b></font><br /><br />
	<a href="insertar.php">Agregar nueva persona</a><br /><br />
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
		<?php
		try {
			//echo($sql);
			$cursor = $conn->query($sql);
			foreach ($cursor as $fila) {
		?>
				<tr>
					<td><?= $fila["Id"] ?></td>
					<td><?= $fila["Nombre"] ?></td>
					<td><?= $fila["Sueldo"] ?></td>
					<td>
						<?php
						if (isset($fila["Fecha"]))
							echo ($fila["Fecha"]);
						else
							echo ("&nbsp;");
						?>
					</td>
					<td>
						<?php
						if ($fila["Masculino"])
							echo ("Si");
						else
							echo ("No");
						?>
					</td>
					<td>
						<?php
						if (isset($fila["Imagen"])) {
							$cad = "<img src=\"" . $PathImg . "/" . $fila["Imagen"] . "\">";
							echo ($cad);
						} else
							echo ("&nbsp;");
						?>
					</td>
					<td>
						<a href="editar.php?id=<?= $fila["Id"] ?>">
							Actualizar
						</a>
					</td>
					<td>
						<a href="eliminar.php?id=<?= $fila["Id"] ?>">
							Eliminar
						</a>
					</td>
				</tr>
		<?php
			}
		} catch (PDOException $e) {
			echo ("Error!, " . $e->getMessage() . "<br/>");
		}
		$cursor = null;
		$conn = null;
		?>
		<tr>
			<td colspan="4" align="center">
				<?php
				if ($pagina > 0) {
				?>
					<a href="listado.php?pagina=<?= $pagina - 1 ?>">
						Anteriores
					</a>
				<?php
				} else echo ("&nbsp");
				?>
			</td>
			<td colspan="4" align="center">
				<?php
				if ($pagina < $totalPaginas) {
				?>
					<a href="listado.php?pagina=<?= $pagina + 1 ?>">
						Siguientes
					</a>
				<?php
				} else echo ("&nbsp");
				?>
			</td>
		</tr>
	</table>
	Página <?= $pagina + 1 ?> de <?= $totalPaginas + 1 ?> <br />
	Se presentan <?= $MaxReg ?> registros de <?= $totalRegistros ?> encontrados
</body>
<html>