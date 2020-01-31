<?php

	
	NuevaAnecdota($_POST['usuario'], $_POST['anecdota'],$_FILES['imagen']);
	
	function NuevaAnecdota($usu, $anecd)
	{
		include 'conect.php';

		$nom_archivo=$_FILES['imagen']['name']; // Para conocer el nombre del archivo
		$ruta = "../imagenes/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['imagen']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo

		$sentencia= "INSERT INTO agenda (usuario, anecdota,imagen) VALUES ('".$usu."', '".$anecd."','".$ruta."') ";
		$conexion->query($sentencia) or die ("Error al ingresar los datos".mysqli_error($conexion));	
	}
?>

<script type="text/javascript">
	alert("Anecdota ingresada correctamente!!");
	window.location.href='../modelo/agenda.php';
</script>

