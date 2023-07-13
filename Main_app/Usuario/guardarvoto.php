<?php

	include("conexion.php");
	$conexion = Conexion();
	$id_cand = $_REQUEST['id'];
	$cedula=$_REQUEST['cedula'];
	$edad = $_REQUEST['edad'];
	$sexo = $_REQUEST['sexo'];
	$departamento = $_REQUEST['departamento'];
	
	$query = "SELECT cedula FROM votante WHERE cedula = '$cedula'";
	$resultado = mysqli_query($conexion,$query);
	$row = mysqli_num_rows($resultado);

	if (empty($row)) {
			//consulta para insertar si no se repite
			$query2 = "INSERT INTO votante(cedula, edad, sexo, departamento, id_candidato, estado) VALUES ('$cedula','$edad','$sexo','$departamento','$id_cand', 'Correcto')";
			$resultado2 = mysqli_query($conexion,$query2);

			if ($resultado2) {
				echo"<script>alert('Su voto se ha registrado con exito');history.go(-1);</script>"; 
				//
			}else {
				echo "No se inserto";
			}
	}else{
		$query2 = "UPDATE votante SET estado='Nulo' WHERE cedula= '$cedula' AND id_candidato <> '$id_cand'";
			$resultado2 = mysqli_query($conexion,$query2);

			if ($resultado2) {
				echo"<script>alert('Su voto se ha ANULADO');;history.go(-1)</script>";
				//
			}else {
				echo "No se inserto";
			}
	}	

	

?>