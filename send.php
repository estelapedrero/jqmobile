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

//enviar el mail a traver de una función de php
mail($mailto, $subject, $message);

?>