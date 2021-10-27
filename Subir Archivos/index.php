<!DOCTYPE html>
<html>
<head>
	<title>Subir Archivos</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<style>
		body{
			padding-left: 15px;
			margin-left: 15px;
		}
		
		
	</style>
</head>
<body>
<h1>SUBIR ARCHIVOS</h1>
	<form action="subir.php" method="post" enctype="multipart/form-data">
		<input type="file" name="archivo">
		<br><br>
		<button class="btn btn-primary">Subir Archivo</button>
	</form>
</body>
</html>