<?php
	EliminarAnecdota($_GET['nro_trans']);

	function EliminarAnecdota($nro_trans)
	{
		include 'conect.php';
		$sentencia="DELETE FROM agenda WHERE nro_trans='".$nro_trans."' ";
		$conexion->query($sentencia) or die ("Error al eliminar".mysqli_error($conexion));

	}
?>

<script type="text/javascript">
	alert("Anecdota Eliminada!!");
	window.location.href='index.php';
</script>