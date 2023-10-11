<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



// Carga las clases de PHPMailer
require './phpmailer/PHPMailer-master/src/Exception.php';
require './phpmailer/PHPMailer-master/src/PHPMailer.php';
require './phpmailer/PHPMailer-master/src/SMTP.php';

// Datos del formulario
$nombre = $_POST["nombre"];
$email = $_POST["email"];
$mailAmigo = $_POST["amigo_email"];
$nombreAmigo = $_POST["amigo_nombre"];


// Configuración del servidor SMTP de Mailtrap.io
$smtpServer = "sandbox.smtp.mailtrap.io";
$smtpPort = 2525;
$smtpUsuario = "198bdda7f8d483";
$smtpClave = "2a2774f767fc3f";

// Crea una instancia de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuración del servidor SMTP
    $mail->isSMTP();
    $mail->Host = $smtpServer;
    $mail->SMTPAuth = true;
    $mail->Port = $smtpPort;
    $mail->Username = $smtpUsuario;
    $mail->Password = $smtpClave;

    // Configuración del correo electrónico
    $mail->setFrom($email, $nombre);
    $mail->addAddress('unmail@hotmail.com','Destinatario');
    $mail->Subject = 'Recomendación de sitio web';
    $mail->Body = "Hola,$nombreAmigo
    Te recomiendo visitar este sitio web

    Espero que lo disfrutes.

    Saludos,
    $nombre";


    // Envía el correo
    $mail->send();
    echo "El correo se ha enviado correctamente.";
} catch (Exception $e) {
    echo "Hubo un problema al enviar el correo: " . $mail->ErrorInfo;
}