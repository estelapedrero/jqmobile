<?php

//recogida de variables
$varName = $HTTP_POST["name"];
$varMail = $HTTP_POST["mail"];
$varComment = $HTTP_POST["comment"];

//crear el mensaje_ enviar los datos que recojo a mi direccion de email
$mailto = 'estela@estelapedrero.com';
$subject = 'comentario desde la webmovil';
$message = '
<html>
	<head>
		<title>comentario desde la webmovil</title>
	</head>
	<body>
		<p> user-name: ' . $varName . ' user-comment: ' . $varComment . ' user-mail: ' . $varMail . '</p>
	</body>
</html>

';
//fijar el formato del mail
$cabecera = 'MIME-Version: 1.0' ."\r\n";
$cabecera .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

//cabeceras adicionales
$cabecera .= 'To: estelapedrero <estela@estelapedrero.com>' . "\r\n";
$cabecera .= 'From: webmovil <>estela@estelapedrero.com' . "\r\n";

//enviar el mail a traver de una función de php
mail($mailto, $subject, $message, $cabecera);

?>