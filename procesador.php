<?php



		$nombre=$_POST['nombre'];
		$apellido=$_POST['apellido'];
		$email=$_POST['email'];
		$telefono=$_POST['telefono'];
		$mensaje=$_POST['mensaje'];


		$asunto= $nombre . "\t" . "Envio la siguiente consulta a traves de la web ";

		$contenido  ="Nombre: " . $nombre . "\r\n";
		$contenido .="<br>Apellido: " .$apellido . "\r\n";
 		$contenido .="<br>E-Mail: " . $email ."\r\n";
 		$contenido .="<br>Telefono: " . $telefono ."\r\n"; 
 		$contenido .="<br>Mensaje: " . $mensaje;
	   
		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require 'PHPMailer/Exception.php';
		require 'PHPMailer/PHPMailer.php';
		require 'PHPMailer/SMTP.php';
		
		
		// Load Composer's autoloader
		//require 'vendor/autoload.php';

        if((include 'validadorFormulario.php' ) ==TRUE){

		$mail = new PHPMailer(true);
		try {
			//Server settings
			$mail->SMTPDebug = 0;                      // Enable verbose debug output veo el bug al enviar mail 
			$mail->isSMTP();                                            // Send using SMTP
			$mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through seteo servidor de correo
			$mail->SMTPAuth   = true;                                   // Enable SMTP authentication
			$mail->Username   = 'ezequiel.ledesma026@gmail.com';                     // SMTP username
			$mail->Password   = 'gdragon3392';                               // SMTP password
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
			$mail->Port       = 587;                                    // TCP port to connect to

		//Recipients
			$mail->setFrom($email, $nombre);                          // desde donde se va enviar 
			$mail->addAddress('ezequiel.ledesma026@gmail.com');      // Add a recipient   a donde se va enviar
			$mail->addAddress($email); 
		// Content
			$mail->isHTML(true);                                  // Set email format to HTML
			$mail->Subject =  $asunto;
			$mail->Body    =  $contenido;
			$mail->CharSet = 'UTF-8';
			$mail->send();
			//header("Location:index.php");
			echo '<script>  alert ("El mensaje se envio correctamente");window.location.href="index.php"; </script> ';
		}
		 catch (Exception $e) {
			//echo "Se produjo un error al enviar el mensaje: {$mail->ErrorInfo}";
	        //header("Location:contacto.html");
		 	echo '<script>  alert ("El mensaje no pudo ser enviado por errores en la carga de datos");window.location.href="contacto.html"; </script> ';

		  }
	    }
	?>

