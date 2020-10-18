<?php 
	include "funciones.php";

	$fechaInicio=$_POST['fecha'];
	$fechaFin=date('Y-m-d');
	echo edad($fechaInicio,$fechaFin)[0];

 ?>