<?php
//Llamando a los campos
$motivo = $_POST['motivo'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$comentario = $_POST['comentario'];
//Datos para el correo
$destinatario = "taxistasargentinos@gmail.com";
$asunto = "Contacto desde la pagina web";

$carta = "De: $nombre \n";
$carta .= "Email: $email \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Comentario: $comentario";

//Enviando mensaje
mail($destinatario, $asunto, $carta);
header('Location:mensaje_envio.html')

?>