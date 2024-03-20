<?php 
// Inclusion des dépendances PHPMailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'mail/PHPMailer/src/Exception.php';
require 'mail/PHPMailer/src/PHPMailer.php';
require 'mail/PHPMailer/src/SMTP.php';


session_start();
require "pdo.php";

$id_waiting = $_POST['id_waiting'];
    $query = "Select * from waiting_list where id_waiting = :id_waiting";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id_waiting"=>$id_waiting]);
    if($stmt->rowCount() > 0) {
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result)
        {
            $mail = $result['mail'];
        }
        $_SESSION['mailCompany'] = $mail;
     } 
if(isset($_POST['Validate'])) {
    // Select informations from the waiting id of the company
    $query = "Select * from waiting_list where id_waiting = :id_waiting";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id_waiting"=>$id_waiting]);

    if($stmt->rowCount() > 0) {
        // Assignment of those informations into variables
        foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result)
        {
            $company_name = $result['company_name'];
            $siren = $result['siren'];
            $mail = $result['mail'];
            $password = $result['password'];
            $phone = $result['phone'];
            $town = $result['town'];
            $postcode = $result['postcode'];
            $country = $result['country'];

        }
    }

    $pdo->beginTransaction();
    // Insert the previous informations into the table named company sign_in
    $stmt = $pdo->prepare("INSERT INTO company_signin (company_name, siren, mail, password, phone, town, postcode, country, signin_since) VALUES (:company_name, :siren, :mail, :password, :phone, :town, :postcode, :country, CURRENT_TIMESTAMP)");
                    $stmt->execute([
                        ':company_name' => $company_name,
                        ':siren' => $siren,
                        ':mail' => $mail,
                        ':password' => $password,
                        ':phone' => $phone,
                        ':town' => $town,
                        ':postcode' => $postcode,
                        ':country' => $country,
                    ]);
                    if ($stmt->rowCount() > 0) {
                        $pdo->commit();
                        Header('Location:../view/dashboard/waitingCompany.php');
                         $pdo->commit();
                        // Informations d'authentification SMTP
                        $smtpHost = "smtp.gmail.com";
                        $smtpPort = 587;
                        $smtpUsername = "tequilachaboche@gmail.com"; // Remplacez par votre adresse Gmail
                        $smtpPassword = "evdt qzsd ogmr hrem"; // Remplacez par votre mot de passe d'application

                        // Création de l'objet PHPMailer
                        $email = new PHPMailer(true);

                        // Paramètres SMTP
                        $email->isSMTP();
                        $email->Host = $smtpHost;
                        $email->SMTPAuth = true;
                        $email->Username = $smtpUsername;
                        $email->Password = $smtpPassword;
                        $email->SMTPSecure = 'tls';
                        $email->Port = $smtpPort;

                            // Corps du message en HTML
                            $email->isHTML(true);
                            $email->CharSet = 'UTF-8';
                            $email->Subject = "Cvtheque - Acceptation à la cvtheque ";
                            $email->Body = "Bonjour,<br><br>
                            Nous avons l'honneur de vous notifier de votre acceptation au sein de la cvthèque du lycée Henri Wallon. <br>
                            Vous pouvez dès à présent vous connecter à la cvthèque avec votre adresse mail et le mot de passe renseigné lors de votre inscription. <br>
                            Votre Equipe, Cvthèque Wallon.
                            ";
                            // Ajout de l'adresse de destination
                            $email->addAddress($mail);

                            // Envoi de l'e-mail
                            $email->send();
                        Header('Location:../view/dashboard/waiting_company.php');
                    } else {
                        echo "Erreur lors de l'acceptation.";
                    }
}
if(isset($_POST['Refuse'])) {
    // Delete informations from the waiting_list table
    $query = "DELETE FROM `waiting_list` WHERE id_waiting = :id_waiting";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id_waiting"=>$id_waiting]);

    Header("Location:../view/dashboard/waitingCompany.php");
    // Informations d'authentification SMTP
    $smtpHost = "smtp.gmail.com";
    $smtpPort = 587;
    $smtpUsername = "tequilachaboche@gmail.com"; // Remplacez par votre adresse Gmail
    $smtpPassword = "evdt qzsd ogmr hrem"; // Remplacez par votre mot de passe d'application

    // Création de l'objet PHPMailer
    $email = new PHPMailer(true);

    // Paramètres SMTP
    $email->isSMTP();
    $email->Host = $smtpHost;
    $email->SMTPAuth = true;
    $email->Username = $smtpUsername;
    $email->Password = $smtpPassword;
    $email->SMTPSecure = 'tls';
    $email->Port = $smtpPort;

        // Corps du message en HTML
        $email->isHTML(true);
        $email->CharSet = 'UTF-8';
        $email->Subject = "Cvtheque - Refus de la cvtheque ";
        $email->Body = "Bonjour,<br><br>
        Nous avons le regret de vous notifier que nous ne sommes pas en mesure d'accepter votre demande pour rejoindre la cvthèque du lycée Henri Wallon. <br>
        N'hésitez pas à vous rapprocher de l'établissement pour de plus amples informations.<br>
        Votre Equipe, Cvthèque Wallon.
        ";
        // Ajout de l'adresse de destination
        $email->addAddress($_SESSION['mailCompany']);

        // Envoi de l'e-mail
        $email->send();

    Header("Location:../view/dashboard/waiting_company.php");

}

?>