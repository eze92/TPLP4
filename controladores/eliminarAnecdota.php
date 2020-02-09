<?php
EliminarAnecdota($_GET['nro_trans']);

function EliminarAnecdota($nro_trans)
{
    include 'conect.php';
     
    $sen = "SELECT imagen FROM agenda where nro_trans='" . $nro_trans . "' ";
    $resultado = $conexion->query($sen) or die(mysqli_error($conexion));
    while ($fila = $resultado->fetch_assoc()) {
        $espera = unlink("../imagenes/" . $fila['imagen']);
    }
    $sentencia = "DELETE FROM agenda WHERE nro_trans='" . $nro_trans . "' ";
    $conexion->query($sentencia) or die("Error al eliminar" . mysqli_error($conexion));
    
}
?>
<script type="text/javascript">
    alert("Anecdota Eliminada!!");
    window.location.href='../modelo/agenda.php';
</script>