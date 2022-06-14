<?php
//Llamando campos

$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];

//Datos para el correo
$to = "info@rozzidigital.com";
$subject = "Contacto desde Rozzi taller de autos";

// compose headers
$headers = "From: Rozzitaller.com\r\n";
$headers .= "Reply-To: info@rozzidigital.com\r\n";
$headers .= "X-Mailer: PHP/".phpversion();






//enviar Correo
mail($destinatario, mb_encode_mimeheader($asunto), $contenido, $cabeceras);
header('Location: gracias.php');

//Estructura del correo
$msg= "
<html>
    <head>
        <title><h1>$subject</h1></title>
    </head>
    <body>
        <h2>Consulta del visitante <b>$name</b></h2>
        <p> Buenos días, mi nombre es $name, mi teléfono es $phone y mi mail es $email.</p>
        <p> Mi consulta es $message. muchas gracias</p>
    </body>
</html>
";

// To send HTML mail, the Content-type header must be set
$headers = "MIME-Version: 1.0\r\n";
/*$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";*/
$headers .= "Content-Type: text/html; charset=\"UTF-8\"\r\n"; /*agrego para probar si anda bien los caracteres*/
$headers .= "Content-Transfer-Encoding: 8bit\r\n"; /*agrego para probar si anda bien los caracteres*/

//Enviando mensaje
mail($to, $subject, $msg, $headers); 
    header('Location:index.html');
    //echo 'maybe the message has been sent!;
//}else {
   // echo 'Unable to send email. Please try again.';
//}
?>
