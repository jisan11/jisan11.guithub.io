<?php

	include("conexion.php");
	$conexion = Conexion();
	$id = $_REQUEST['id'];
	$nombre=$_POST['nombre'];
	$partido = $_POST['partido'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

	$query = "UPDATE candidatos SET nombre_cand='$nombre' , nombre_part='$partido', foto_cand='$Imagen' WHERE id='$id' ";
	$resultado = mysqli_query($conexion,$query);

	if ($resultado) {
		header("Location: index.php");
	}else {
		echo "No se inserto";
	}
?>