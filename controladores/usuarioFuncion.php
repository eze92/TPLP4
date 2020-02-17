<?php

session_start();


ConsultarUsuario($_POST['inputUsuario'], $_POST['inputPassword']);

function ConsultarUsuario($usuario, $password)
{
    include 'conect.php';
    $sentencia = "SELECT * FROM usuarios WHERE usuario='" . $usuario . "' AND password='" . $password . "' AND status='ACTIVO'  ";
    $resultado = $conexion->query($sentencia) or die("Error al comprobar usuario: " . mysqli_error($conexion));
    
    $count = mysqli_num_rows($resultado);
    
    if ($count > 0) {
        $_SESSION['usuario'] = $usuario;
        echo '<script> 
        alert("Bienvenido!!");
        window.location.href="../modelo/agenda.php";
        </script>';
    } else {
        echo '<script>
         alert("Datos de acceso incorrectos");
         window.location.href="../index.php";
         </script>';
    }
}
?>
