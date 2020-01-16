<?php

	$nombre   = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$email    = $_POST['email'];
	$mensaje  = $_POST['mensaje'];

	if(empty($nombre)){
		echo"<p> Agrega tu nombre </p>";
	}


?>