<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Detalles</title>
		<?php include'../../inc/head_common.php';?>

	</head>

	<body>

		<?php include '../../inc/header2.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/workshops2.css">
		
		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina, imagen de menu-->
				
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Sistema de Votación</h2>
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
										<?php 
											$cedula = $_REQUEST['cedula'];
											$edad = $_REQUEST['edad'];
											$sexo = $_REQUEST['sexo'];
											$provincia = $_REQUEST['provincia'];

										?>
										<table class="table table-bordered">
										<thead>
											 <tr>
											    <th>CEDULA</th>
											    <th>EDAD:</th>
											    <th>SEXO:</th> 
											    <th>PROVINCIA:</th>
											    <th>TERMINAR:</th>
											  </tr>
											  <td><?php echo $cedula;?></td>	
											  <td><?php echo $edad;?></td>
											  <td><?php echo $sexo;?></td>
											  <td><?php echo $provincia;?></td>
											  <td><a href="index.php" class="btn btn-primary" role="button">Finalizar</a></td>
											 <tr>
										</thead>
										</table>
										<br>
										<table class="table table-bordered">
										<thead>	 
											    <th>ID:</th>
											    <th>NOMBRE:</th> 
											    <th>PARTIDO:</th>
											    <th>FOTO</th>
											    <th colspan="2">Realice Su Voto</th>
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
											 		<th><a href="guardarvoto.php?id=<?php echo $row ['id'];?>&cedula=<?php echo $cedula;?>&edad=<?php echo $edad;?>&sexo=<?php echo $sexo;?>&provincia=<?php echo $provincia;?>" class="btn btn-primary" role="button">Votar</a></th>
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