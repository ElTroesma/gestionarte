<html>
	<head>
		<link rel="stylesheet" href="assets/css/master.css">
		<link rel="stylesheet" href="assets/css/submit.css">
		<link rel="stylesheet" href="assets/css/responsive.css">
		<link rel="stylesheet" href="assets/css/normalize.css">
		<link rel="icon" type="image/png" href="assets/media/favicon.png">
		<link href='http://fonts.googleapis.com/css?family=Asap:400,700' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=divice-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>Gestion Arte</title>
	</head>
	<body>

<?php
	require 'PHPMailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$to = "gestionarteadm@gmail.com";

	$nombre = $_POST['firstname'];
	$apellido = $_POST['lastname'];
	$telefono = $_POST['phone'];
	$email = $_POST['email'];
	$mensaje = nl2br($_POST['message']);

	$mail->From = $email;
	$mail->addAddress($to);
	$mail->isHtml(true);
	$mail->Body = '<strong>Nombre:</strong>  '.$nombre.'<br><br><strong>Apellido:</strong>  '.$apellido.'<br><br><strong>Correo de contacto:</strong>  '.$email.'<br><br><strong>Teléfono:</strong>  '.$telefono.'<br><br><strong>Nos ha enviado el siguiente mensaje:<br><br></strong><p>'.$mensaje.'</p>';
	$mail->CharSet = 'UTF-8';
	
	if ($mail->send()) {
		echo '
		<div class="mensaje container alert alert-success" id="return-submit">
			<p class="submit-p">¡Gracias por enviarnos tu mensaje!</p>
			<p class="submit-p">Pronto nos contactaremos contigo</p>
			<div class="separation submit-separation"></div>
			<a href="index.html"><button class="submit-button services-button">VOLVER AL INICIO</button></a>
		</div>';
	} else {
		echo '
		<div class="mensaje container alert alert-danger" id="return-submit">
			<p class="submit-p">¡Error al enviar tu mensaje!</p>
			<p class="submit-p">Intenta de nuevo...</p>
			<div class="separation submit-separation"></div>
			<a href="index.html"><button class="submit-button services-button">VOLVER AL INICIO</button></a>
		</div>';
	}
?>

		<footer class="main-footer submit-footer">
			<div class="align">
				<div class="copyright-container">
					<span>Powered by</span>
					<a href="http://appsxxi.com" target="_blank">
						<img src="assets/media/appsxxi-logo.png" class="copyright-img">
					</a>
				</div>
			</div>
		</footer>
	</body>
</html>
