<html>
<style>



</Style>

<body>

	<?php
	$i = 0;




	for ($i = 0; $i < 100; $i++) {
		$aleatorio = rand(0, 8);
		$colores = array("red", "green", "blue", "pink", "purple", "magenta", "yellow", "brown");

	?>
		<font color="<?php echo $colores[$aleatorio] ?> ">Hola con PHP #<?php echo ($i . "\n") ?></font><br />

	<?php

	}



	?>

	<body>

</html>