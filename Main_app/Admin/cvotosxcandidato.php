<?php
$con = mysqli_connect('localhost','root','','votos');
$id = $_REQUEST ['id'];
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Gráficos
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Browser', 'Visits'],
 <?php 
 $query = "SELECT DISTINCT id_candidato,COUNT(*) as total FROM votante WHERE id_candidato = '$id' AND estado = 'Correcto' GROUP BY id_candidato";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['total']."',".$row['id_candidato']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Estadísticas de Votos por Candidato'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));

 chart.draw(data, options);
 }
 </script>
</head>
 </script>
 		<?php include '../../inc/head_common.php';?>
 		<link rel="stylesheet" href="../../css/mainreportes.css">
		<link rel="stylesheet" href="../../css/workshops3.css">
		<link rel="stylesheet" href="../../css/style.css">
</head>
<body>
<?php include '../../inc/header.php'; ?>
 
 		<?php 

				include("conexion.php");
				$conexion = Conexion();
				$id = $_REQUEST ['id'];
				$query = "SELECT * FROM candidatos WHERE id='$id' ";
				$resultado = mysqli_query($conexion,$query);
				$row = mysqli_fetch_assoc($resultado);
		?>

			<article id="w1-detail" class="detail">
				<header>
				<!--Cabecera de la pagina repuesto, imagen de menu-->
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<h2>TSE</h2>
							</div>
						</div>
					</div>
				</header>
				<div class="container">
						<div class="col">
							<div class="col-xs-12">
								<section id="tipos-repuestos">
									<h3 class="highlighted">Reporte Votos por Candidato OEP 2023</h3>
									<div class="historia col">
									<div class="col-xs-6" >
									<div class="main">
										<form>
											<div class="form-group">
												<label  class="label">Candidato</label>
												<input type="text" name="nombre"  class="form-control" 
									    		value="<?php echo $row['nombre_cand'];?>" disabled/>
											</div>
											<div class="group">
												<label class="label">Partido</label>
												<input name="partido" type="text" class="form-control" placeholder="Partido Politico" 
												value="<?php echo $row['nombre_part'];?>" disabled/>
											</div>
											<div class="group">
												<label for="pass" class="label">Foto de Candidato</label>
												<br>
												<img height="100px" src="data:image/jpg;base64, <?php echo base64_encode($row['foto_cand']);  ?>"/>			
											</div>	
										</form>
									</div>   								
		   				 			</div>
									</div>	
											<div class="col-xs-6" id="piechart" style="width: 500px; height: 430px;"></div>											
								</section>
							</div>
						</div>
				</div>	

		</article>	

			

  <?php include '../../inc/footer.php';?>
  <?php include '../../inc/footer_common.php';?>
  
</body>
</html>