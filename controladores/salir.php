<?php
	session_start();
	session_destroy();

	echo '<script>    alert("Cerro la sesion"); window.location.href="../index.php";</script>';  

?>

