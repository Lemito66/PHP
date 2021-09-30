<?php
include("funciones.php");
$accion = $_POST["txtAccion"];
switch($accion){
	case "eliminar":
		$id = $_POST["txtId"];
		// echo("Se va a eliminar el registro: ". $id);
		// exit;
		EliminarRegistro($id);
		break;
		
}
header("Location:listado.php");
function EliminarRegistro($id){
	global $conn;
	Conectar();
	try {
		//code...
		$sql= "DELETE FROM persona WHERE id= :id";
		$cursor = $conn->Prepare($sql);
		$cursor-> bindParam(':id', $id);
		$cursor->execute();
	} catch (PDOException $e) {
		echo("Error: ". $e->getMessage(). "<br>");
	}
	$cursor = null;
	$conn = null;
	

}
?>