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
    $mail->Username = 'fc0aa97e86135d';
    $mail->Password = '6e37c9390420e3';

    // Configuración del correo electrónico
    $mail->setFrom('tucorreo@mailtrap.io', 'Tu Nombre');
    $mail->addAddress('destinatario@example.com', 'Destinatario');
    $mail->isHTML(true);
    $mail->Subject = 'prueba';
    $mail->Body = '<html><body><h1>Correo de prueba con formato HTML</h1><p>Este es un correo de prueba</p></body></html>';

    // Envía el correo
    $mail->send();
    echo 'El correo se ha enviado correctamente.';
} catch (Exception $e) {
    echo 'Hubo un problema al enviar el correo: ' . $mail->ErrorInfo;
}
?>