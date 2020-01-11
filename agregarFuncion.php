<?php

	
	NuevaAnecdota($_POST['nro_trans'], $_POST['usuario'], $_POST['anecdota']);
	
	function NuevaAnecdota($nro_trans, $usu, $anecd)
	{
		include 'conect.php';
		$sentencia= "INSERT INTO agenda (nro_trans, usuario, anecdota) VALUES ('".$nro_trans."', '".$usu."', '".$anecd."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Anecdota ingresada correctamente!!");
	window.location.href='index.php';
</script>