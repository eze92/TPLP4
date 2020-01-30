<?php

	
	ModificarAnecdota($_POST['nro_trans'], $_POST['usuario'], $_POST['anecdota']);
	
	function ModificarAnecdota($nro_trans, $usu, $anecd)
	{
		include 'conect.php';
		$sentencia= "UPDATE agenda SET usuario='".$usu."', anecdota='".$anecd."' WHERE nro_trans='".$nro_trans."' ";

		$conexion->query($sentencia) or die ("Error al actualizar los datos".mysqli_error($conexion));
	}
	if ($_FILES["file1"]["error"] > 0){
		
	} else 
	{
		$nom_archivo=$_FILES['file1']['name']; // Para conocer el nombre del archivo
		$ruta = "../imagenes/" . $nom_archivo;  // La ruta del archivo contiene el nuevo nombre y el tipo de extension
		$archivo = $_FILES['file1']['tmp_name']; //el arhivo a subir
		$subir=move_uploaded_file($archivo, $ruta); //se sube el archivo
	    include 'conect.php';
		
		$sentencia_img="UPDATE agenda SET imagen='$ruta' WHERE nro_trans='".$_POST['nro_trans']."' ";
		$conexion->query($sentencia_img) or die ("Error al actualizar datos".mysqli_error($conexion));
		
	}
?>

<script type="text/javascript">
	alert("Anecdota actualizada correctamente !!");
	window.location.href='../modelo/agenda.php';
</script>