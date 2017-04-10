 
<?php
$con = mysqli_connect('localhost','root','','votos');
$id = $_REQUEST ['id'];
?>
<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>
 Create Google Charts
 </title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {

 var data = google.visualization.arrayToDataTable([
 ['Browser', 'Visits'],
 <?php 
 $query = "SELECT DISTINCT provincia,COUNT(provincia) as total FROM votante WHERE id_candidato = '$id'  AND estado = 'Correcto' GROUP BY provincia";

 $exec = mysqli_query($con,$query);
 while($row = mysqli_fetch_array($exec)){

 echo "['".$row['provincia']."',".$row['total']."],";
 }
 ?>
 ]);

 var options = {
 title: 'Estadísticas por Provincia'
 };

 var chart = new google.visualization.PieChart(document.getElementById('piechart'));

 chart.draw(data, options);
 }
 </script>
</head>
<body>
 <h3>Pie Chart</h3>
 <div id="piechart" style="width: 900px; height: 500px;"></div>
</body>
</html>