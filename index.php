<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<?php include 'inc/head_common.php' ; ?>
		
		<link rel="stylesheet" href="./css/main.css">
		<link rel="stylesheet" href="./css/workshops2.css">
		<title>Elecciones 2017</title>
	</head>
	<body>
		<?php include 'inc/header3.php'; ?>
		<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Sistema de Votaciones TSE 2017</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action="" id="formlg">
								<label class="label">Usuario</label>
								<input type="text" name="usuariolg" placeholder="Usuario" required/>
								<label class="label">Contraseña</label>
								<input type="password" name="passlg" placeholder="Contraseña" required/>
								
								<input type="submit" class="botonlg" value="Iniciar Sesion">
							</form>
						</div>		
					</div>
				</div>
			</article>
		</div>
		<script src="./js/jquery.min.js"></script>
		<script src="./js/main.js"></script>
		<?php include 'inc/footer.php';?>
		<?php include 'inc/footer_common.php';?>
	</body>
	