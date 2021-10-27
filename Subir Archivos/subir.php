<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Confirmación</title>
    <style>
		body{
			padding-left: 15px;
			margin-left: 15px;
		}
		
	</style>
</head>
<body>
<?php 


    $nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];

    if(!file_exists('Archivos Subidos')){
        mkdir('Archivos Subidos',0777,true);
        if(file_exists('Archivos Subidos')){
            if(move_uploaded_file($guardado, 'Archivos Subidos/'.$nombre)){
                echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar";
            }
        }
    }else{
        if(move_uploaded_file($guardado, 'Archivos Subidos/'.$nombre)){
            
            echo "Archivo guardado con exito";
            ?>
            
           <form method = "POST" action="index.php"> 
               <br>
               
               <input type="submit" name="btn1" value="VOLVER A CARGAR ARCHIVOS" class="btn btn-primary">
           </form>
            <?php   
        }else{
            echo "No ha seleccionado ningun archivo";
            ?>
            <form action="index.php" method="post">
                <br>
                <input type="submit" value="Ir A PÁGINA PRINCIPAL" class="btn btn-primary">
            </form>
            
            <?php 
            

        }

        
    }
   
?>

    
</body>
</html>


