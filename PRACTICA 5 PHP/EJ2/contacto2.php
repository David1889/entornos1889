<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Carga las clases de PHPMailer
require './phpmailer/PHPMailer-master/src/Exception.php';
require './phpmailer/PHPMailer-master/src/PHPMailer.php';
require './phpmailer/PHPMailer-master/src/SMTP.php';

// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP de Mailtrap.io
    $mail->isSMTP();
    $mail->Host = 'sandbox.smtp.mailtrap.io';
    $mail->SMTPAuth = true;
    $mail->Port = 2525;
    $mail->Username = 'a272f9a9e653af';
    $mail->Password = '360199aefcbaf8';

    // Configuración del correo electrónico
    $nombre = $_POST["name"];
    $correo = $_POST["email"];
    $asunto = $_POST["asunto"];
    $msg = $_POST["mensaje"];
    $mail->setFrom($correo, $nombre);
    $mail->addAddress('destinatario@example.com', 'Destinatario');
    $mail->isHTML(true);
    $mail->Subject = $asunto;
    $mail->Body = $msg;

    // Envía el correo
    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo 'Hubo un problema al enviar el correo: ' . $mail->ErrorInfo;
}
?>