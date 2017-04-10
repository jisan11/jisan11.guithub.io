<!DOCTYPE html>
	<?php 
	$id = $_REQUEST ['id'];
	?>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Menú</title>
		<?php include '../../inc/head_common.php';?>

	</head>

	<body>

		<?php include '../../inc/header.php'; ?>
		<!--detail cambia los estilos workshop w1 cambia todo-->
		<link rel="stylesheet" href="../../css/style.css">
		<link rel="stylesheet" href="../../css/workshops2.css">
		<!--detail cambia los estilos workshop w1 cambia todo-->
		

 		<?php 

				include("conexion.php");
				
				$query = "SELECT * FROM candidatos WHERE id='$id' ";
				$resultado = mysql_query($query);
				$row = mysql_fetch_assoc($resultado);
		?>

		<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>Reporte de votos : <td font-size: 16px><?php echo $row['nombre_cand'];?></td></h2>
								<br>
								
								<br>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									
									<div class="historia col">
									<div class="col-xs-4" >
									  <a title="Gráfico por Candidato" href="./cvotosxcandidato.php?id=<?php echo $row ['id'];?>"><img src="../../img/grafico1-128.png" class="img-thumbnail"/></a>	
									</div>
									<div class="col-xs-4" >
									  <a title="Gráfico por Provincia" href="./cvotosxprovincia.php?id=<?php echo $row ['id'];?>"><img src="../../img/grafico2-128.png" class="img-thumbnail"/></a>	
									</div>
									<div class="col-xs-4" >
									  <a title="Gráfico por Edad" href="./cvotosxedad.php?id=<?php echo $row ['id'];?>"><img src="../../img/grafico3-128.png" class="img-thumbnail"/></a>		
											
									</div>

									<div class="col-xs-12">
										<div class="col-xs-4">
											<h3>Votos por Candidato</h3>	
										</div>	
										<div class="col-xs-4">
											<h3>Votos por Provincia</h3>
										</div>	
										<div class="col-xs-4">
											<h3> Votos por Edad</h3>
											
										</div>								
									</div>
									</div>
									
								</section>
							</div>
	
					</div>
				</div>	
					<br>
					<br>
					<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-grafico">
									
									<div class="historia col">
									<div class="col-xs-4" >
									  <a title="Gráfico por Genero" href="./cvotosxsexo.php?id=<?php echo $row ['id'];?>"><img src="../../img/grafico4-128.png" class="img-thumbnail"/></a>		
									</div>
									<div class="col-xs-4" >
									   <a title="Gráfico por Voto Nulo" href="./cvotosxestado.php?id=<?php echo $row ['id'];?>"><img src="../../img/grafico6-128.png"  class="img-thumbnail"/></a>				
									</div>
									<div class="col-xs-4" >
									  <a title="Menú Candidatos" href="./estadisticas.php"><img src="../../img/grafico5-128.png" class="img-thumbnail"/></a>
											
									</div>

									<div class="col-xs-12">
										<div class="col-xs-4">
											<h3>Votos por Genero</h3>
										</div>	
										<div class="col-xs-4">
											<h3>Votos Nulos</h3>
										</div>	
										<div class="col-xs-4">
											<h3> Volver al Menú</h3>
											
										</div>								
									</div>
									</div>									
								</section>
							</div>
						</div>
				</div>	
		</article>						
		
		
		<?php include '../../inc/footer.php';?>
		<?php include '../../inc/footer_common.php';?>
	</body>
	</html>	
