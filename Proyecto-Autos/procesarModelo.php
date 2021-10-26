<?php
    error_reporting(E_ALL);
    
    if(isset($_POST['NOMBRE_MARCA']))
    {
        $marca = $_POST['NOMBRE_MARCA'];

    }
    if(isset($_POST['ORIGEN_MARCA']))
    {
        $origen = $_POST['ORIGEN_MARCA'];

    }
    if(isset($_POST['ID_MARCA']))
    {
        $id_marca = $_POST['ID_MARCA'];

    }
          
    $accion=$_POST['txtAccion'];

    
    include('funciones.php');  
    
    if($accion=='txtIngresar')
    {
        $id_marca=$_POST['id_marca'];            
        $nombre_modelo=$_POST['nombre_modelo'];
        $precio_modelo=$_POST['precio_modelo'];
        $anio_modelo=$_POST['anio_modelo'];
        $pagina=$_POST['pagina'];

     
        
        if(empty($_POST['nombre_modelo']) || empty($_POST['precio_modelo'])||empty($_POST['anio_modelo']))
        {
            header("location:../Proyecto-Autos/Modelo/ingresarModelo.php?id=".$id_marca."&marca=".$marca."&origen=".$origen."&pagina=".$pagina."&mensaje2=Existen campos vacíos");
            exit();                     
        }    
        try
        {
                    
            Conectar();
            global $conn;       
            $sqlCompleto="INSERT INTO modelo (ID_MARCA,NOMBRE_MODELO,PRECIO_MODELO,ANIO_MODELO)
            VALUES ('".$id_marca."','".$nombre_modelo."','".$precio_modelo."','".$anio_modelo."')";               
            echo ($sqlCompleto);
            
            $cursor = $conn->Prepare($sqlCompleto);
            $cursor->execute();
            
            header("location:../Proyecto-Autos/Modelo/vistaModelo.php?id=".$id_marca."&marca=".$marca."&origen=".$origen."&pagina=".$pagina."&mensaje1=Datos Ingresados");
                exit();
                        
        }
        catch(PDOException $e)
        {
            echo("Error: ".$e->getMessage());
            header("location:../Proyecto-Autos/Modelo/vistaModelo.php?id=".$id_marca."&marca=".$marca."&origen=".$origen."&pagina".$pagina."&mensaje2=".$e->getMessage());
            exit();
            

        }

    }
    if($accion=='txtEliminar')
    {
        
        
        if (empty($_POST['chequeo']))
        {
            //header("location:../Proyecto-Autos/Modelo/vistaModelo.php?mensaje3=No se han seleccionado registros para eliminar");
            header('Location:'. getenv('HTTP_REFERER').'&mensaje2=No se ha seleccionado algun registro para eliminar');
            //$http_response_code("location:../Proyecto-Autos/Modelo/vistaModelo.php?mensaje3=No se han seleccionado registros para eliminar");
            exit();                     
        }
        else
        {
            $chequeo=$_POST['chequeo'];
            
                try
                {
                        Conectar();            
                        global $conn; 
                        foreach ($chequeo as $eliminado)
                        {      
                            $sqlCompleto="DELETE from modelo where ID_MODELO=".$eliminado;               
                            //echo ($sqlCompleto);
                            
                            $cursor = $conn->Prepare($sqlCompleto);
                            $cursor->execute();
                        }
                        //header("location:../Proyecto-Autos/Modelo/vistaModelo.php?marca=".$marca."&origen=".$origen."&id=".$id_marca."&mensaje=Datos eliminados correctamente");
                        header('Location:'. getenv('HTTP_REFERER').'&mensaje1=Datos Eliminados correctamente');
                        exit();
                                                                                                                       
                }catch(PDOException $e)
                {

                }
           
           

        }
    }
    if($accion=="txtEditar")
    {
        $id=$_POST['id'];
        $id_modelo=$_POST['id_modelo'];
        $anio_modelo=$_POST['anio_modelo'];
        $precio_modelo=$_POST['precio_modelo'];
        $nombre_modelo=$_POST['nombre_modelo'];
        $marca=$_POST['marca'];
        $origen=$_POST['origen'];

        if(empty($_POST['precio_modelo'])||empty($_POST['anio_modelo'])||empty($_POST['nombre_modelo']))
        {
            header('location:../Proyecto-Autos/Modelo/editarModelo.php?&ID_MODELO='.$id_modelo.'&ID_MARCA='.$id.'&ORIGEN_MARCA='.$origen.'&NOMBRE_MARCA='.$marca.'&mensaje2=Existen campos vacios');
            exit();
            

        }
        else
        {
            try
            {
                Conectar();
            global $conn;       
            $sqlCompleto="UPDATE modelo SET ID_MARCA=".$id.", NOMBRE_MODELO='".$nombre_modelo."' ,PRECIO_MODELO=".$precio_modelo.", ANIO_MODELO=".$anio_modelo." WHERE ID_MODELO=".$id_modelo;
            //$sqlCompleto4 = "UPDATE usuarios SET USU_INTENTO=" .$reporte_Nuevo." WHERE ID_USUARIO =".$id;
            //echo ($sqlCompleto);
            //xit();
            
            $cursor = $conn->Prepare($sqlCompleto);
            $cursor->execute();

            header('location:../Proyecto-Autos/Modelo/vistaModelo.php?marca='.$marca."&origen=".$origen."&id=".$id."&mensaje3=Se editaron los datos correctamente");
            exit();

            }
            catch(PDOException $e)
            {
                //echo($e->getMessage());
                header('location:../Proyecto-Autos/Modelo/editarModelo.php?&ID_MODELO='.$id_modelo.'&ID_MARCA='.$id.'&ORIGEN_MARCA='.$origen.'&NOMBRE_MARCA='.$marca.'&mensaje2='.$e->getMessage());
                Exit();            
            }
            
        }
    }
    
?>