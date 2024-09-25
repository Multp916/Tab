<?php 

function conexion() {

	$conexion=mysqli_connect('localhost', 'root', '', 'dtbs');

	if($conexion) {
		return $conexion;
	} else {
		return 'Error de conexion';
	}
}

 ?>