<?php
  
  $consulta=ConsultarAnecdota($_GET['nro_trans']);

  function ConsultarAnecdota( $nro_trans )
  {
   include "conect.php";
   $sentencia="SELECT * FROM agenda WHERE nro_trans='".$nro_trans."' ";
   $resultado= $conexion->query($sentencia) or die ("Error al consultar datos de la agenda".mysqli_error($conexion)); 
   $fila=$resultado->fetch_assoc();

   return [
    $fila['nro_trans'],
    $fila['usuario'],
    $fila['anecdota']
   ];
  }

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Turismo</title>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,400italic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/estilos.css">
	<link rel="stylesheet" href="css/normalize.css">
</head>
<body>
	<header>

		<div class ="holder">
			

		<section class ="logo">	
		<img src="galeria/logo.jpg" alt="logo">
		</section>

		<h1>Turismo Nacional e Internacional  </h1>


			<div id="facebook">
				<p><a href="http://www.facebook.com/" target="_blank"><img alt="Siguenos en Facebook" src="https://lh6.googleusercontent.com/-CYt37hfDnQ8/T3nNydojf_I/AAAAAAAAAr0/P5OtlZxV4rk/s32/facebook32.png" width=32 height=32  /></a></p>	
			</div>

		</div>

		<div id="twitter">		

				<a href="http://twitter.com/" target="_blank"><img src="https://lh6.googleusercontent.com/--aIk2uBwEKM/T3nN1x09jBI/AAAAAAAAAs8/qzDsbw3kEm8/s32/twitter32.png" width=32 height=32 alt="Síguenos en Twitter" /></a>
			</div>


	</header><!-- /header -->

<nav>
		<div class="holder ">
			
	
		 <ul>
				<li><a href="index.php" title="">Home</a></li>
				<li><a href="#">¿Donde viajo?</a>
             	<ul>
             		<li><a href="provincias.html">Provincias Argentinas </a></li>
             		<li><a href="#">Continentes</a>
            			<ul>
             				<li><a href="vistas/america.html">América</a></li>
             				<li><a href="vistas/europa.html">Europa</a></li>
             				<li><a href="vistas/asia.html">Asia</a></li>
             			</ul>
        		</ul>
        </li>
        </li>
				<li><a href="servicios.html" title="">Servicios</a></li>
				<li><a href="pago.html" title="">Formas de Pago</a></li>				
			    <li><a href="agenda.html" title=""> Agenda </a><li>
			    <li><a href="contacto.html" title=""> Contacto </a><li>			
		 </ul>
		</div>

	</nav>



	<section class="holder">
	    <h2>Agenda del viajero</h2>

		<div class="columna left">
			<div id="contenido">
				<div style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">

  					<h1>Modificar Anecdota</h1> 
  					<br>
  	<form action="modificarFuncion.php" method="POST" style="border-collapse: separate; border-spacing: 10px 5px;">
  	   <input type="hidden" name="nro_trans"  value="<?php echo $_GET['nro_trans']?>">
  					<label>Numero: </label>
  					<input type="text" id="nro_trans" name="nro_trans" value="<?php echo $consulta[0] ?>" ><br>
  		
  					<label>Usuario: </label>
  					<input type="text" id="usuario" name="usuario" value="<?php echo $consulta[1] ?>"><br>
  		
  					<label>Anecdota: </label>
  					<textarea style="border-radius: 10px;" rows="3" cols="50" name="anecdota"><?php echo $consulta[2] ?>  </textarea><br>
  		
  					<br>
  					<button type="submit" class="btn btn-success">Guardar</button>
     </form>


  		
  			</div>

		</div>
		
	</section>
	
	<footer>
			<p >
			Turismo Nacional e interncional 
 			Caseros Buenos Aires Argentina, Valentín Gómez 4772, B1678			
 			turismo_nacional_internacional@hotmail.com- Tel. / Fax: +54 11 4575-5012 
		</p>
			
		<p >Copyright 2020 :Diseño y Programación: Ezequiel Ledesma</p>
	</footer>

</body>
</html>