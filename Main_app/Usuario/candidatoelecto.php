  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include '../../inc/head_common.php' ; ?>

 <link rel="stylesheet" href="../../css/main.css">
 <link rel="stylesheet" href="../../css/style.css">
 <link rel="stylesheet" href="../../css/workshops2.css">
 
  <title>Agregar Candidato</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>
<?php include '../../inc/header3.php'; ?>


			<?php 

				include("conexion.php");
				$id = $_REQUEST ['id'];
				$query = "SELECT * FROM candidatos WHERE id='$id' ";
				$resultado = mysql_query($query);
				$row = mysql_fetch_assoc($resultado);
			?>
			
<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Candidato Electo Votaciones TSE 2017</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
							<?php
								$id = $_REQUEST ['id'];
								$cedula = $_REQUEST['cedula'];
								$edad = $_REQUEST['edad'];
								$sexo = $_REQUEST['sexo'];
								$provincia = $_REQUEST['provincia'];

							?>
						<div class="main">
							<form action="guardarvoto.php?id=<?php echo $row['id'];?>&cedula=<?php echo $cedula;?>&edad=<?php echo $edad;?>&sexo=<?php echo $sexo;?>&provincia=<?php echo $provincia;?>" method="POST" enctype="multipart/form-data">
								
			 						<div class="group">
										<label for="mail" class="label">Candidato</label>
										<input type="text" name="nombre"  class="form-control" placeholder="Nombre Candidato" 
									    value="<?php echo $row['nombre_cand'];?>" disabled/>
									</div>
									<div class="group">
										<label for="mail" class="label">Partido</label>
										<input name="partido" type="text" class="form-control" placeholder="Partido Politico" 
										value="<?php echo $row['nombre_part'];?>" disabled/>
									</div>
									<div class="group">
										<label for="pass" class="label">Foto de Candidato</label>
										<br>
										<img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto_cand']);  ?>"/>			
									</div>
									<br>
									<div class="group">
										<input type="submit" class="button" value="Votar">
									</div>
		   					 </form>
						</div>		
					</div>
				</div>
			</article>
	</div>

  <?php include '../../inc/footer.php';?>
  <?php include '../../inc/footer_common.php';?>
</body>
</html>