<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<?php

	$limite = 100;
	$fibonacci  = array(0, 1);
	for ($i = 2; $i <= $limite; $i++) {
		$fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2] . "<br/>";
		$tamañoarreglo = sizeof($fibonacci);
	}
	?>
	<table border="1">
		<?php
		$a = 1;
		while ($a < $tamañoarreglo) {
			echo ('<tr>');
			for ($i = 0; $i < 5; $i++) {
				echo ('<td>' . $fibonacci[$a] . '</td>');
				$a = $a + 1;
			}
			echo ('</tr>');
		}
		?>
	</table>
</body>

</html>