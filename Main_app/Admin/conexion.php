<?php
function Conexion(){
	$link =mysqli_connect ("localhost","root", "","votos");
	if($link){
		print("Connection Established Successfully");
		return $link;
	}else
	{
		echo "conexion fallo";
	}
}
	
?>