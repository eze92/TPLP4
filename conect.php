<?php
	
	/*$conexion=mysql_connect("mysql16.000webhost.com","a6449874_eze","dragon3392")
	or exit ("No se puede conectar al servidor");*/

  $conexion = new mysqli("localhost","root","");
  if(mysqli_connect_errno())
  {
	printf("fallo la conexion");
  }
  else {
   printf("estas conectado"); 
  }

	//$base_datos=mysql_select_db("a6449874_turismo",$conexion)
	//or exit ("No se puede conectar con la base de datos");


?>