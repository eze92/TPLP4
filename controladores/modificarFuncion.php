<?php


ModificarAnecdota($_POST['nro_trans'], $_POST['usuario'], $_POST['anecdota']);

function ModificarAnecdota($nro_trans, $usu, $anecd)
{
    include 'conect.php';
    
    $nom_archivo    = $_FILES['imagen']['name']; // Para conocer el nombre del archivo
    $tamanio_imagen = $_FILES['imagen']['size'];
    $maximo         = 2000000;
    $tipo_imagen    = $_FILES['imagen']['type'];
    $tipos          = array(
        "image/gif",
        "image/jpeg",
        "image/jpg",
        "image/png"
    );
    
    if (in_array($tipo_imagen, $tipos) && $tamanio_imagen <= $maximo) {
        
        $archivo = $_FILES['imagen']['tmp_name']; //el arhivo a subir
        $ruta    = "../imagenes/" . $nom_archivo; // La ruta del archivo contiene el nuevo nombre y el tipo de extension    
        $subir   = move_uploaded_file($archivo, $ruta); //se sube el archivo
        
        $sentencia = "UPDATE agenda SET usuario='" . $usu . "', anecdota='" . $anecd . "',imagen='$ruta' WHERE nro_trans='" . $nro_trans . "' ";
        $conexion->query($sentencia) or die("Error al actualizar los datos" . mysqli_error($conexion));
        
        echo '<script> alert("Anecdota actualizada correctamente!!"); window.location.href="../modelo/agenda.php";</script>';
    } else {
        echo '<script> alert("La anecdota no pudo ser ingresa, verifique el tipo de archivo y el tamaño de la imagen!!"); window.location.href="../modelo/agenda.php";</script>';
    }
}

?>
