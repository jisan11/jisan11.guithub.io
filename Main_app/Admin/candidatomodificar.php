  <!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <?php include '../../inc/head_common.php' ; ?>

 <link rel="stylesheet" href="../../css/main.css">
 <link rel="stylesheet" href="../../css/style.css">
 <link rel="stylesheet" href="../../css/workshops3.css">
 
  <title>Agregar Candidato</title>
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Open+Sans:600'>
</head>
<?php include '../../inc/header.php'; ?>


			<?php 

				include("conexion.php");
				$conexion = Conexion();
				$id = $_REQUEST ['id'];
				$query = "SELECT * FROM candidatos WHERE id='$id' ";
				$resultado = mysqli_query($conexion,$query);
				$row = mysqli_fetch_assoc($resultado);
			?>

<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Modulo Modifica Candidato Votaciones OEP 2023</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action="proceso_modificar.php?id=<?php echo $row['id']; ?> " method="POST" enctype="multipart/form-data">
			 						<div class="group">
										<label for="mail" class="label">Candidato</label>
										<input type="text" name="nombre"  class="form-control" placeholder="Nombre Candidato" 
									    value="<?php echo $row['nombre_cand'];?>" />
									</div>
									<div class="group">
										<label for="mail" class="label">Partido</label>
										<input name="partido" type="text" class="form-control" placeholder="Partido Politico" 
										value="<?php echo $row['nombre_part'];?>" required/>
									</div>
									<div class="group">
										<label for="pass" class="label">Foto de Candidato</label>
										<img height="70px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto_cand']);  ?>"/>
										<input type="file" name="Imagen" required="Falta Imagen" />
									</div>
									<br>
									<div class="group">
										<input type="submit" class="button" value="Modificar">
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