<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Candidatos</title>
		<?php include '../../inc/head_common.php';?>

	</head>

	<body>
		<?php include '../../inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/workshops2.css">

		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Candidatos</h2>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="candidatos">
									<h3>Tabla de Candidatos</h3>
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
										
											 <tr>
											    <th>PAPELETA:</th>
											    <th>NOMBRE:</th> 
											    <th>PARTIDO:</th>
											    <th>FOTO</th>
											    <th colspan="2">Estadísticas</th>
											  </tr>
										</thead>
										<tbody>
											<?php 
												include("conexion.php");
												$query = "SELECT * FROM candidatos";
												$resultado = mysql_query($query);
												while ($row = mysql_fetch_assoc($resultado)) {
											 ?>	
											 	<tr>
											 		<td><?php echo $row['id']; ?></td>
											 		<td><?php echo $row['nombre_cand']; ?></td>
											 		<td><?php echo $row['nombre_part']; ?></td>
											 		<td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto_cand']); ?>"/></td>
											 		<th><a href="menuestad.php?id=<?php echo $row ['id'];?>" class="btn btn-primary" role="button">Ver Reportes</a></th>
											 	</tr>
											 <?php
												 }
											 ?>
										</tbody>
										<table>
											<tr>
																
											</tr>	
										</table>				
									</div>			
								</section>
		
		</article>						
		
		<?php include '../../inc/footer.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	