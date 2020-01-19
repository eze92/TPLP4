<?php


    if(isset($_POST['submit'])){

	if(empty($nombre) == TRUE){
		echo"<p> Agrega tu nombre </p>";
	} else { 
		if (is_numeric($nombre) == TRUE)	{
	  	//echo"<p> No debe ingresar numeros  </p>";
	     return false;
	     } 
	 }
/*	 if(empty($apellido)){
		echo"<p> Agrega tu apellido </p>";
	} else { 
		if (is_numeric($apellido))	{
	  	echo"<p> No debe ingresar numeros  </p>";
	     } 
	 }
	      
    if(empty($email)){
		echo"<p> Agregue un correo  </p>";
	} else {
	   if(!filter_var($email,FILTER_VALIDATE_EMAIL))	{
	  	echo"<p> El correo es invalido  </p>";
	  }	
	}
	if(empty($telefono)){
		echo"<p> Agregue un telefono  </p>";
	   } else {
	   if (!is_numeric($telefono))	{
	  	echo"<p> No debe ingresar letras solo numeros  </p>";
	   }
	    else { 
	    	return true; 
	    }
	   }  

    if(empty($mensaje)){
		echo"<p> Agrega el mensaje </p>";
	}*/

  }

?>