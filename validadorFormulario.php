<?php

    $patron_texto = "/^[a-zA-ZáéíóúÁÉÍÓÚäëïöüÄËÏÖÜàèìòùÀÈÌÒÙ\s]+$/";

    if(isset($_POST['submit'])){

	if(empty($nombre) ){
		return false;
	} else { 
		if (!(preg_match($patron_texto, $nombre)))	{
	    return false;
	   } 
	 }
	if(empty($apellido) ){
		return false;
	} else { 
		if (!(preg_match($patron_texto, $apellido)))	{
	    return false;
	   } 
	 }
	      
    if(empty($email)){
		return false;
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