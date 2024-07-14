<?php
// Configurar cada uno de los inputs con el método POST
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$numeros = $_POST['numero'];
$comentarios = $_POST['comentarios'];

// Validar que todos los campos estén completos
if (!empty($nombre) && !empty($correo) && !empty($numeros) && !empty($comentarios)) {
    // Crear el header
    $header = "Content-Type: text/plain";

    // Crear el mensaje
    $mensaje = "Este mensaje fue enviado por " . $nombre . ",\r\n";
    $mensaje .= "Desde la dirección de correo: " . $correo . ",\r\n";
    $mensaje .= "Su número de contacto es: " . $numeros . ",\r\n";
    $mensaje .= "Mensaje: " . $comentarios . ",\r\n";
    $mensaje .= "Enviado el " . date("d/m/Y", time());

    // Datos de donde tiene que llegar la información
    $para = "cimientoestudio@gmail.com";
    $asunto = "Contacto desde formulario Cimiento Estudio";

    // Enviar el correo
    if (mail($para, $asunto, utf8_decode($mensaje), $header)) {
        // Redirección al enviar el formulario
        header("Location: gracias.html");
    } else {
        echo "Hubo un error al enviar el mensaje. Por favor, intenta de nuevo.";
    }
} else {
    echo "Por favor, completa todos los campos.";
}
?>