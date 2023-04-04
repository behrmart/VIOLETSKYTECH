<?php

// EMAIL from violetskytech.com comment section
// by @behrmart para GABCA bufete Creativo.

$name = $email = $comment = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = test_input($_POST["nombre"]);
  $email = test_input($_POST["email"]);
  $comment = test_input($_POST["mensaje"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$to      = 'info@violetskytech.com';
$subject = 'from VIOLETSKYTECH.COM WEBFORM';
$message = 'From: '.$name."\r\n\r\n".'email: '.$email."\r\n\r\n".$comment;
$headers = 'From: info@violetskytech.com' . "\r\n" .
    'Reply-To: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?> 

<?php include 'VIOLETSKY-HEADER.php';?>

<!-- BEHRMART Contacto PHP -->
<div class="container-fluid emailsent">
	<div class="row">
		<div class="col-12 p-5 text-center">
			<h1>Your message has been sent. Thank you.</h1>
			<!-- <button type="button" class="btn btn-outline-warning">Regresar a Inicio</button> -->
			<a href="index.php" class="btn btn-outline-secondary">Back to Home</a>
		</div>
	</div>
</div>

<?php include 'VIOLETSKY-FOOTER.php';?>