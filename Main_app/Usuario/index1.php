<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalles</title>
		<?php include '../../inc/head_common.php';?>

	</head>

	<body>
		<?php include '../../inc/header2.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/workshops3.css">
		<link rel="stylesheet" href="../../css/main.css">
		<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Registro  de  Votante  OEP  2023</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action="votar.php" id="formlg">
								<label class="label">Cédula</label>
								<input id="ced" name="cedula" type="text" required class="form-control" onkeypress="return valida(event)" required />
								<br>
								<label class="label">Edad</label>
								<input id="ed" name="edad" type="text" onkeypress="return valida(event)" required/>
								<br>
									<label class="label"> Sexo    :</label>
									<select class="selectpicker" name="sexo" required>
										 <option>Masculino</option>
										 <option>Femenino</option>
									</select>
								<br>	
								<br>	
								<label class="label">Departamentos</label>
									<select class="selectpicker" name="departamento" required>
										 	<!--<option>San_José</option>
											<option>Alajuela</option>
											<option>Cartago</option>
											<option>Heredia</option>
											<option>Guanacaste</option>
											<option>Puntarenas</option>
											<option>Limón</option> -->
											<option>Pando</option>
											<option>Santa Cruz</option>
											<option>La Paz</option>
											<option>Beni</option>
											<option>Cochabamba</option>
											<option>Oruro</option>
											<option>Chuquisaca</option>
											<option>Potosi</option>
											<option>Tarija</option>
									</select>
									<br>
									<br>
									<br>
								<input type="submit" class="botonlg" value="Validar">
							</form>
						</div>		
					</div>
				</div>
			</article>
		</div>
	<script src="../../js/valida.js"></script> 
		<?php include '../../inc/footer.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	