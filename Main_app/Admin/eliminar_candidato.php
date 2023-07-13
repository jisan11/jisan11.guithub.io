<?php

	include("conexion.php");
	$conexion = Conexion();
	$id = $_REQUEST['id'];

	$query = "DELETE FROM candidatos WHERE id='$id' ";
	$resultado = mysqli_query($conexion,$query);

	if ($resultado) {
		header("Location: index.php");
	}else {
		echo "No se ELIMINO";
	}
?>