<?php
    error_reporting(E_ALL);

    include('../funciones.php');
    
    $accion=$_POST['txtAccion'];

    if($accion=="txtIngresar")
    {
        $nombre_marca=$_POST['NOMBRE_MARCA'];
        $origen_marca=$_POST['ORIGEN_MARCA'];
        $pagina2=$_POST['PAGINA2'];

        if(empty($_POST['NOMBRE_MARCA'])||empty($_POST['NOMBRE_MARCA']))
        {
            header('Location:../Marca/ingresarMarca.php?pagina2='.$pagina2.'&mensaje2=Existen campos vacíos');
            exit();

        }
        else
        {
            try
            {
                Conectar();
                global $conn;
                $cantidad_marca=0;       
                $sqlCompleto="INSERT INTO marca (NOMBRE_MARCA,ORIGEN_MARCA,CANTIDAD_MARCA) VALUES ('".$nombre_marca."'".
                ",'".$origen_marca."',".$cantidad_marca.")";        
       
                $cursor = $conn->Prepare($sqlCompleto);
                $cursor->execute();
                header('Location:../Principal.php?pagina2='.$pagina2.'&mensaje1=Marca ingresada correctamente');
                exit();
            

            }catch(PDOException $e)
            {
                header('Location:../Marca/ingresarMarca.php?pagina2='.$pagina2.'&mensaje2=Esta marca ya esta registrada');
                exit();

            }
        }

    }
    if($accion=="txtEditar")
    {
        $id_marca=$_POST['ID_MARCA'];
        $nombre_marca=$_POST['NOMBRE_MARCA'];
        $origen_marca=$_POST['ORIGEN_MARCA'];
        $pagina2=$_POST['pagina2'];
        if(empty($_POST['NOMBRE_MARCA'])||empty($_POST['ORIGEN_MARCA']))
        {
            header('location:editarMarca.php?NOMBRE_MARCA='.$nombre_marca.'&ORIGEN_MARCA='.$origen_marca.'&pagina2='.$pagina2.'&ID_MARCA='.$id_marca.'&mensaje2=Existen campos vacíos');
            exit();

        }
        else
        {
            try
            {
                Conectar();
                global $conn;
                $sqlCompleto="UPDATE marca SET NOMBRE_MARCA='".$nombre_marca."',ORIGEN_MARCA='".$origen_marca."' WHERE ID_MARCA=".$id_marca;
                $cursor = $conn->Prepare($sqlCompleto);
                $cursor->execute();
                header('location:../Principal.php?mensaje1=Datos actualizados correctamente&pagina2='.$pagina2);
                exit();


            }
            catch(PDOException $e)
            {
                header('location:editarMarca.php?NOMBRE_MARCA='.$nombre_marca.'&ORIGEN_MARCA='.$origen_marca.'&pagina2='.$pagina2.'&ID_MARCA='.$id_marca.'&mensaje2='.$e->getMessage());
                exit();

            }
        }



    }
    if($accion=="txtEliminar")
    {
        $id_marca=$_POST['ID_MARCA'];
        $nombre_marca=$_POST['NOMBRE_MARCA'];
        $origen_marca=$_POST['ORIGEN_MARCA'];
        $pagina2=$_POST['pagina2'];
        $chequeo=$_POST['chequeo'];

        if (empty($_POST['chequeo']))
        {
            
            header('location:../Principal.php?mensaje2=No se ha seleccionado ningun registro para eliminar&pagina2='.$pagina2);
            
            exit();                     
        }
        else
        {
            try
            {
                Conectar();            
                global $conn; 
                foreach ($_POST['chequeo'] as $eliminado)
                {      
                    $sqlCompleto="DELETE from marca where ID_MARCA=".$eliminado;              
                    //echo ($sqlCompleto);
                    
                    $cursor = $conn->Prepare($sqlCompleto);
                    $cursor->execute();
                    echo($eliminado['ID_MARCA']."<br>");
                }
                header('location:../Principal.php?mensaje2=Se eliminaron los datos correctamente&pagina2='.$pagina2);

            }
            catch(PDOException $e)
            {
                header('location:../Principal.php?mensaje2='.$e->getMessage().'&pagina2='.$pagina2);

            }
        }

    }

    
    
?>