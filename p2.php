<!content HTML>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
	<body>
		<?php 
			if (!empty($_POST["texto"]))
				$texto = $_POST["texto"];
			else
				$texto = "Información incompleta";
			$lista = $_POST["lista"];
			$radio = $_POST["radio"];
			$longitud = $_POST["longitudchk"];
		?>
		<h1>Resultados de la recuperación de datos</h1>
		<hr/>
		<p>Cuadro de texto: <?php echo($texto); ?></p>
		<p>Lista desplegable: <?php echo($lista); ?></p>
		<p>Radio: <?php echo($radio); ?></p>
		<p>
			Checkbox:<br />
			<?php
				for($i=1; $i<=$longitud; $i++)
				{
					$cad = "checkbox".$i;
					if(isset($_POST[$cad]))
					{
			?>
						Sí elegido: Checkbox<?php echo($i); ?>
			<?php
					}
					else
					{
						echo("No elegido: Checkbox$i");
					}
					echo ("<br />");
				}
			?>
		</p>
		<p><a href="p1.html">Otra vez</a></p>
	</body>
</html>	