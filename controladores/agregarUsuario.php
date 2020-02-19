<?php
	NuevoUsuario($_POST['nom'], $_POST['usr'], $_POST['pass'], $_POST['tipo']);

	function NuevoUsuario($nombre, $usuario, $password, $tipo_usr )
	{
		include 'conect.php';

		$sentencia="SELECT DISTINCT 1 FROM usuarios where usuario = '".$usuario."' " ;
    	$resultado=$conexion->query($sentencia) or die ("Error al comprobar usuario: ".mysqli_error($conexion));
    	$count = mysqli_num_rows($resultado);

    	if($count > 0){

        echo '<script>    alert("Ya existe un usuario con el mismo nick "); window.location.href="../index.php";</script>';

   		}else{

		$sentencia="INSERT INTO usuarios (nombre, usuario, password, tipo_usuario, status) VALUES ('".$nombre."', '".$usuario."', '".$password."', '".$tipo_usr."', 'ACTIVO' )";
		$conexion->query($sentencia) or die ("Error al crear usuario: ".mysqli_error($conexion));

		echo '<script>';
			echo 'alert("Usuario creado exitosamente!!");';
			echo 'window.location.href="usuario_nuevo.php";';
		echo '</script>';
		}
	}
?>

