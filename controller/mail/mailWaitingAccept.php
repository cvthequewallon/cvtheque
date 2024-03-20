<?php
// Inclusion des dépendances PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$companyMail = $_SESSION['company_mail'];
// Informations d'authentification SMTP
$smtpHost = "smtp.gmail.com";
$smtpPort = 587;
$smtpUsername = "no-reply@supwallon.fr"; // Remplacez par votre adresse Gmail
$smtpPassword = "evdt qzsd ogmr hrem"; // Remplacez par votre mot de passe d'application

// Création de l'objet PHPMailer
$mail = new PHPMailer(true);

// Paramètres SMTP
//$mail->isSMTP();
$mail->Host = $smtpHost;
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->SMTPSecure = 'tls';
$mail->Port = $smtpPort;

    // Corps du message en HTML
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Cvtheque - Acceptation à la cvtheque ";
    $mail->Body = "Bonjour,<br><br>
    Nous avons l'honneur de vous notifier de votre acceptation au sein de la cvthèque du lycée Henri Walon. <br>
    Vous pouvez dès à présent vous connecter à la cvthèque avec votre adresse mail et le mot de passe renseigner lors de votre inscription. <br>
    Votre Equipe, Cvthèque Wallon.
    ";
    // Ajout de l'adresse de destination
    $mail->addAddress($companyMail);

    // Envoi de l'e-mail
    $mail->send();

?>