<?php

  $conexion = new mysqli("localhost","root","","turismo");
  if(mysqli_connect_errno())
  {
	printf("fallo la conexion");
  }
  /*else {
   printf("estas conectado"); 
  }
*/

?>