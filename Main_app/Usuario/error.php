<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalles</title>
		<?php include '../../inc/head_common.php';?>

	</head>

	<body>
		<?php include '../../inc/headerError.php'; ?>
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
								<label class="label">AVISO: </label>
								<br>
								<label class="label">*VOTANTE NO REGISTRADO </label>
								<br>
								<label class="label">Ó </label>
								<br>
								<label class="label">*USUARIO INCORRECTO </label>
								<br>
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