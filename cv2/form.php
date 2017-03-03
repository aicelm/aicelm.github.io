<?php
if(isset($_POST['email'])) {
exit;
// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
$email_to = "matasalvarezleticia@sudominio.com";
$email_reply = "no-responder@example.org";
$email_subject = "Contacto desde sitio web";

// Aquí se deberían validar los datos ingresados por el usuario
if(!isset($_POST['name']) ||
!isset($_POST['email']) ||
!isset($_POST['message'])  {

echo "Ocurrió un error y el formulario no ha sido enviado.";
echo "Por favor, vuelva atrás y verifique la información ingresada";
die();
}

$email_message .= "Nombre: " . $_POST['name'] . "\n";
$email_message .= "E-mail: " . $_POST['email'] . "\n";
$email_message .= "Comentario: " . $_POST['message'] . "\n\n";


// Ahora se envía el e-mail usando la función mail() de PHP
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);

echo "¡ Muchas gracias por enviar tu mensaje" <i class="fa fa-smile-o" aria-hidden="true></i> "!";
}
?>
