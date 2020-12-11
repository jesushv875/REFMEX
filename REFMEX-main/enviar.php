<?php
$pieza = $_POST['pieza'];
$numero = $_POST ['numero'];

$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $numero . " \r\n";
$message .= "Teléfono de contacto: " . $numero . " \r\n";
$message .= "Mensaje: " . $_POST['pieza'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jesushv875@gmail.com';
$asunto = 'Cotización';

mail($para, $asunto, utf8_decode($message), $header);

echo "envia";
?>
