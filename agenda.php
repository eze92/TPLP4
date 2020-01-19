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
			    <li><a href="agenda.php" title=""> Agenda </a><li>
			    <li><a href="contacto.html" title=""> Contacto </a><li>			
		 </ul>
		</div>

	</nav>



	<section class="holder">
		<h2>Agenda del viajero</h2>

		<div class="columna left">
			

			<p>Ingrese la anecdota que desea guardar. Tiene disponible la opcion de borrar y eliminar en el caso de estar logeado en la pagina</p>

			<table style="margin: auto; width: 800px; border-collapse: separate; border-spacing: 10px 5px;">
  			<thead>
  					<th>Nro Anecdota</th>
  					<th>Usuario</th>
  					<th>Descripcion</th>
  					<th>Imagen</th>
  					<th> <a href="agregarNuevo.php"> <button type='button' class='btn btn-info'>Nuevo</button> </a> </th>

      <?php
        include "conect.php";
        $sentecia="SELECT * FROM agenda";
        $resultado= $conexion->query($sentecia) or die (mysqli_error($conexion));
        while($fila=$resultado->fetch_assoc()) //obtiene datos de la variable fila
        {
        	//muestra los datos por pantalla
          echo "<tr>";
            echo "<td>"; echo $fila['nro_trans']; echo "</td>";
            echo "<td>"; echo $fila['usuario']; echo "</td>";
            echo "<td>"; echo $fila['anecdota']; echo "</td>";
          //  echo "<td>"; echo $fila['imagen']; echo "</td>";
            echo "<td>"; echo "<img src='".$fila['imagen']."' width='300' >"; echo "</td>";
            echo "<td><a href='modificar.php?nro_trans=".$fila['nro_trans']."'> <button type='button' class='btn btn-success'>Modificar</button> </a></td>";
            echo "<td><a href='eliminarAnecdota.php?nro_trans=".$fila['nro_trans']."'> <button type='button' class='btn btn-danger' onclick='return ConfirmDelete()'>Eliminar</button> </a></td>";

          echo "</tr>";
        }
      ?>

    <script type="text/javascript">
	function ConfirmDelete(){
		var respuesta = confirm("Estas seguro que deseas la anecdota ?" );

		if(respuesta == true){
			return true;
		}
		else{
		}
			return false;
	}
	</script>	

  			</thead>

			</table>
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