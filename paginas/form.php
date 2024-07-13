<?php
/*configurar cada uno de los imput con el metodo de almacenar info POST*/ 
$nombre = $_POST ['nombre']
$correo = $_POST ['correo']
$numeros = $_POST ['numero']
$comentarios = $_POST ['comentarios']

/*para hacer que llegue de cierta manera al correo que asignemos*/
$mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
$mensaje .= "Desde la dirección de correo: " .$correo . ",\r\n";
$mensaje .= "Su número de contacto es: " .$numeros . ",\r\n";
$mensaje .= "Mensaje: " .$comentarios . ",\r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

/*Datos de donde tiene que llegar la información*/
$para = 'cimientoestudio@gmail.com';
$asunto = 'Contacto desde formulario Cimiento Estudio';

/*funcion mail*/
mail($para, $asunto, utf8_decode($mensaje), $header);

/*Redirección al enviar el formulario*/
header('Location: gracias.html');

?>
