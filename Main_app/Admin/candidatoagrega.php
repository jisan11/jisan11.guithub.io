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

	<div id ="workshop-list">
			<article id="w1" class="workshop workshop-left">
				<div class="container">
					<div class="row">
						<div class="col-xs-8 main-info">
							<h3 class="highlighted">Modulo Nuevo Candidato Votaciones OEP 2023</h3>
						</div>
						<div class="error">
							<span>Datos de Ingreso no Válidos, Intente de Nuevo</span>
						</div>
						<div class="main">
							<form action='./proceso_guardar.php' id="formlg" method="POST" enctype="multipart/form-data">
			 				   <label class="label">Candidato</label>
						       <input name="nombre" type="text" class="form-control" placeholder="Nombre Candidato" value="" required/>
				               <label for="mail" class="label">Partido</label>
				               <input name="partido" type="text" class="form-control" placeholder="Partido Politico" value="" required/>
				               <label for="pass" class="label">Foto de Candidato</label>
				               <input type="file" name="Imagen" required="Falta Imagen" />
				               <br>
				               <input type="submit" class="button" value="Guardar">
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