<?php

	include("conexion.php");
	$conexcion = Conexion();
	$nombre=$_POST['nombre'];
	$partido = $_POST['partido'];
	$Imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
	
	$query = "INSERT INTO candidatos(nombre_cand, nombre_part, foto_cand) VALUES 
	('$nombre','$partido', '$Imagen')";
	$resultado = mysqli_query($conexcion,$query);

	if ($resultado) {
	
		header("Location: index.php");
	}else {
		echo "No se inserto";
	}
?>