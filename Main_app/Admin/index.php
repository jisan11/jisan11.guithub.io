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
		
		<link rel="stylesheet" href="../../css/workshops3.css">
		<link rel="stylesheet" href="../../css/style.css">
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
								<section id="tipos-repuestos">
									<h3>Tabla de Candidatos</h3>
									<div class="col-xs-12">									
										<table class="table table-bordered">
										<thead>
											<tr>
												<td >
													<a href="candidatoagrega.php" class="btn btn-primary" role="button">Agregar Candidatos</a>				
												</td>
											</tr>
											 <tr>
											    <th>PAPELETA:</th>
											    <th>NOMBRE:</th> 
											    <th>PARTIDO:</th>
											    <th>FOTO</th>
											    <th colspan="2">Operaciones</th>
											  </tr>
										</thead>
										<tbody>
											<?php 
												include_once ("conexion.php");
												$conexion = Conexion();
												$query = "SELECT * FROM candidatos";
												$resultado = mysqli_query($conexion, $query);
												while ($row = mysqli_fetch_assoc($resultado)) {
											 ?>	
											 	<tr>
											 		<td><?php echo $row['id']; ?></td>
											 		<td><?php echo $row['nombre_cand']; ?></td>
											 		<td><?php echo $row['nombre_part']; ?></td>
											 		<td><img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto_cand']); ?>"/></td>
											 		<th><a href="candidatomodificar.php?id=<?php echo $row ['id'];?>" class="btn btn-primary" role="button">Modificar</a></th>
											 		<th><a href="eliminar_candidato.php ?id=<?php echo $row ['id'];?>" class="btn btn-primary" role="button">Eliminar</a></th>
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



