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
             		<li><a href="america.html">América</a></li>
             		<li><a href="europa.html">Europa</a></li>
             		<li><a href="asia.html">Asia</a></li>
             	</ul>
            </ul>
        </li>
        </li>
				<li><a href="servicios.html" title="">Servicios</a></li>
				<li><a href="pago.html" title="">Formas de Pago</a></li>
				<li><a href="contacto.html" title="">Contacto</a></li>

			</ul>
		</div>

	</nav>




	<section class="holder">
		<h2>Información de contacto</h2>

		<div class="columna right">


		<p style ="font-size:16px ;font-weight:bold">Nuestra ubicacion: </p>

		<iframe width="425" height="350" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=es&amp;geocode=&amp;q=Medrano+951&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.885545,107.138672&amp;ie=UTF8&amp;hq=Medrano+951&amp;hnear=&amp;radius=15000&amp;ll=-34.598497,-58.420114&amp;spn=0.071946,0.071946&amp;t=m&amp;iwloc=lyrftr:m,14590791904863696851,-34.59849,-58.420122&amp;output=embed"></iframe><br /><small><a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=es&amp;geocode=&amp;q=Medrano+951&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=47.885545,107.138672&amp;ie=UTF8&amp;hq=Medrano+951&amp;hnear=&amp;radius=15000&amp;ll=-34.598497,-58.420114&amp;spn=0.071946,0.071946&amp;t=m&amp;iwloc=lyrftr:m,14590791904863696851,-34.59849,-58.420122" style="color:#0000FF;text-align:left">Ver mapa más grande</a></small>

		</div>

	<?php

		//include("conect.php");


		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$mensaje=$_POST['mensaje'];
		
		//$resultado = mysql_query("INSERT INTO consulta VALUES(NULL,'$nombre','$apellido','$email','$telefono','$mensaje')",$conexion);

		
	//	$remitente="From: $nombre <$email>";

	//	$destino='ezequiel.ledesma026@gmail.com';

		$asunto= $nombre . "Envio la siguiente consulta a traves de la web ";

		$contenido  ="Nombre: " . $nombre . "\r\n";
		$contenido .="Apellido: " .$apellido . "\r\n";
 		$contenido .="E-Mail: " . $email ."\r\n";
 		$contenido .="Telefono: " . $telefono ."\r\n"; 
 		$contenido .="Mensaje: " . $mensaje;


 	// 	$remitente_usuario="From: sitio web <ezequiel.ledesma026@gmail.com>";
 	//	$asunto_usuario="Aviso de recibo de consulta";
 	//	$contenido_usuario="Enviaste el siguiente mensaje: " . $mensaje . "\r\n";
 	//	$contenido_usuario ="A la brevedad nos comunicaremos. Gracias por elegirnos";


 	//	mail($destino,$asunto,$contenido,$remitente);	
 	//	mail($email,$asunto_usuario,$contenido_usuario,$remitente_usuario);

 	//	echo "Los datos se enviaron correctamente."; 
		
		
	   
	    
		
		// nueva parte empieza 
		
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/Exception.php';
		require 'PHPMailer/PHPMailer.php';
		require 'PHPMailer/SMTP.php';

		// Load Composer's autoloader
		//require 'vendor/autoload.php';
		$mail = new PHPMailer(true);
		try {
			//Server settings
			$mail->SMTPDebug = 2;                      // Enable verbose debug output veo el bug al enviar mail 
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through seteo servidor de correo
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'ezequiel.ledesma026@gmail.com';                     // SMTP username
			$mail->Password   = 'gdragon992';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = 587;                                    // TCP port to connect to

		//Recipients
			$mail->setFrom($email, $nombre);          // desde donde se va enviar 
			$mail->addAddress('ezequiel.ledesma026@gmail.com');      // Add a recipient   a donde se va enviar
		// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject =  $asunto;
			$mail->Body    =  $contenido;
			$mail->CharSet = 'UTF-8';
			$mail->send();
			echo 'El mensaje se envio correctamente';
		} catch (Exception $e) {
			echo "Se produjo un error al enviar el mensaje: {$mail->ErrorInfo}";
		
	    }
	?>

	</div>
		

	<div class="parrafo">
		<p>Para mas información visite nuestra pagina de <a style="text-decoration:none" href="http://www.facebook.com/" target="_blank">Facebook</a> y/o <a style="text-decoration:none" href="http://twitter.com/" target="_blank">Twitter </a>.</p>
		<p>Si desea enviar sugerencias para mejorar nuestra pagina o nuestro servicio 
		puede hacerlo mediante el mail de <span id="negrita">sugerencia_turismo@hotmail.com</span></p> 
	</div>






	</section>
	
	<footer>
		<p >
			Turismo Nacional e interncional 
 			Caseros Buenos Aires Argentina, Valentín Gómez 4772, B1678			
 			turismo_nacional_internacional@hotmail.com- Tel. / Fax: +54 11 4575-5012 
		</p>
			
		<p >Copyright 2020 :Diseño y Programación: Ezequiel Ledesma</p>

</body>
</html>