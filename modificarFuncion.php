<?php

	
	ModificarAnecdota($_POST['nro_trans'], $_POST['usuario'], $_POST['anecdota']);
	
	function ModificarAnecdota($nro_trans, $usu, $anecd)
	{
		include 'conect.php';
		$sentencia= "UPDATE agenda SET nro_trans='".$nro_trans."', usuario='".$usu."', anecdota='".$anecd."' WHERE nro_trans='".$nro_trans."' ";

		$conexion->query($sentencia) or die ("Error al actualizar los datos".mysqli_error($conexion));
	}
?>

<script type="text/javascript">
	alert("Anecdota actualizada correctamente !!");
	window.location.href='index.php';
</script>