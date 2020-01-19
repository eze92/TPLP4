<?php


    if(isset($_POST['submit'])){

	if(empty($nombre) ){
		return false;
	} else { 
		if (is_numeric($nombre))	{
	    return false;
	   } 
	 }
	if(empty($apellido) ){
		return false;
	} else { 
		if (is_numeric($apellido))	{
	    return false;
	   } 
	 }
	      
    if(empty($email)){
		echo"<p> Agregue un correo  </p>";
	} else {
	   if(!filter_var($email,FILTER_VALIDATE_EMAIL))	{
	  	return false;
	  }	
	}
    if(empty($telefono)){
		return false;
	} else {
	   if (!is_numeric($telefono))	{
	    return false; 
	    } 
	} 

    if(empty($mensaje)){
		return false;
	}

  }

?>