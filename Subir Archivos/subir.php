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


    $nombre=$_FILES['archivo']['name'];
    $guardado=$_FILES['archivo']['tmp_name'];

    if(!file_exists('Archivos Subidos')){
        mkdir('Archivos Subidos',0777,true);
        if(file_exists('Archivos Subidos')){
            if(move_uploaded_file($guardado, 'Archivos Subidos/'.$nombre)){
                echo "Archivo guardado con exito";
            }else{
                echo "Archivo no se pudo guardar uuuuuu";
            }
        }
    }else{
        if(move_uploaded_file($guardado, 'Archivos Subidos/'.$nombre)){
            
            echo "Archivo guardado con exito";
            ?>
            
           <form method = "POST" action="index.php"> 
               <br>
               <br>
               <input type="submit" name="btn1" value="VOLVER A CARGAR ARCHIVOS">
           </form>
            <?php   
        }else{
            echo "Error al cargar archivo";
        }

        
    }
   
?>

    
</body>
</html>


