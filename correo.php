<?php
$nombre = $ _POST['nombre'];
$email = $ _POST['email'];
$asunto= $_POST['asunto']
$mensaje = $ _POST['mensaje'];
$para = 'edisonguillermoo@hotmail.com';

 
$msjCorreo = "Nombre: $nombre\n E-Mail: $email\n Asunto: $asunto\n Mensaje:\n $mensaje";
 
if ($ _POST['submit']) {
if (mail ($para, $asunto, $msjCorreo)) {
echo 'El mensaje se ha enviado';
} else {
echo 'Falló el envio';
}
}
?>