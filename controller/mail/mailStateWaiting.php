<?php
// State = if it's been refused or validated

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
$mail->isSMTP();
$mail->Host = $smtpHost;
$mail->SMTPAuth = true;
$mail->Username = $smtpUsername;
$mail->Password = $smtpPassword;
$mail->SMTPSecure = 'tls';
$mail->Port = $smtpPort;

if(isset($_SESSION['Validate'])) {
    // Corps du message en HTML
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Cvtheque - Inscription validé ";
    $mail->Body = "Bonjour,<br><br>
    Votre inscription à l'application de la cvthèque du Lycée Henri Wallon est validé. <br>
    Vous êtes inscrit à la liste d'attente de validation par l'un de nos enseignants. <br><br>
    Suite à la validation ou au refus, vous recevrez un mail vous confirmant votre statut et votre accès à l'application. <br>
    Merci de votre compréhension. <br> 
    Votre Equipe, Cvthèque Wallon.";

    // Ajout de l'adresse de destination
    $mail->addAddress($companyMail);

    // Envoi de l'e-mail
    $mail->send();

}   else if(isset($_SESSION['Refuse'])) {
    // Corps du message en HTML
    $mail->isHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Subject = "Cvtheque - Inscription validé ";
    $mail->Body = "Bonjour,<br><br>
    Votre inscription à l'application de la cvthèque du Lycée Henri Wallon est validé. <br>
    Vous êtes inscrit à la liste d'attente de validation par l'un de nos enseignants. <br><br>
    Suite à la validation ou au refus, vous recevrez un mail vous confirmant votre statut et votre accès à l'application. <br>
    Merci de votre compréhension. <br> 
    Votre Equipe, Cvthèque Wallon.";

    // Ajout de l'adresse de destination
    $mail->addAddress($companyMail);

    // Envoi de l'e-mail
    $mail->send();
}

?>