<?php
$motivo = $_POST['motivo']
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$mail = $_POST['email'];
$telefono = $_POST['telefono'];
$empresa = $_POST['comentario'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$comentario = "Este comentario fue enviado por " . $nombre $apellido . ",\r\n";
$comentario .= "Su e-mail es: " . $mail . " \r\n";
$comentario .= "Comentario: " . $_POST['comentario'] . " \r\n";
$comentario .= "Enviado el " . date('d/m/Y', time());

$para = 'taxistasargentinos@gmail.com';
$asunto = 'Mensaje del sitio web';

mail($para, $asunto, utf8_decode($comentario), $header);

header("Location:index.html");
?>