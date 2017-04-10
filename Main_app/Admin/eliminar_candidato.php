<?php

	include("conexion.php");

	$id = $_REQUEST['id'];

	$query = "DELETE FROM candidatos WHERE id='$id' ";
	$resultado = mysql_query($query);

	if ($resultado) {
		header("Location: index.php");
	}else {
		echo "No se ELIMINO";
	}
?>