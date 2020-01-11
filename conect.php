<?php

  $conexion = new mysqli("localhost","root","");
  if(mysqli_connect_errno())
  {
	printf("fallo la conexion");
  }
  else {
   printf("estas conectado"); 
  }


?>