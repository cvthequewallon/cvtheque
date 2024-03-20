<?php
session_start();
require_once "pdo.php";

// Input validation and sanitization
function sanitize($data)
{
    $data = trim($data);  // Remove whitespace
    $data = htmlspecialchars($data);  // Prevent XSS attacks
    return $data;
}

if (isset ($_POST['submitStudent'])) {

    // Recuperation des info user
    $first_name = sanitize($_POST['first_name'] ?? "");
    $last_name = sanitize($_POST['last_name'] ?? "");
    $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ?? "";
    $password = sanitize($_POST['password'] ?? "");
    $phone = sanitize($_POST['phone'] ?? "");
    $birthday = sanitize($_POST['birthday'] ?? "");
    $town = sanitize($_POST['town'] ?? "");
    $postcode = sanitize($_POST['postcode'] ?? "");
    $country = sanitize($_POST['country'] ?? "");

    // Hash password using a strong algorithm
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check for duplicate email
    $stmt = $pdo->prepare("SELECT mail FROM user_signin WHERE mail = :mail");
    $stmt->execute([':mail' => $mail]);

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['messageSignValidation'] = "L'adresse e-mail est déjà utilisée";
        header('location:../view/formSignUp.php');
        exit();
    } else {
        // Use prepared statements with placeholders for all values
        try {
            $pdo->beginTransaction();

            $stmt = $pdo->prepare("INSERT INTO user_signin VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
            $stmt->execute([$first_name, $last_name, $mail, $hashedPassword, $phone, $birthday, $town, $postcode, $country]);

            if ($stmt->rowCount() > 0) {
                $pdo->commit();
                $_SESSION['messageSignValidation'] = "Inscription étudiant réussie.";
                header('location:../index.php');
            } else {
                $_SESSION['messageSignValidation'] = "Erreur lors de l'inscription, merci de contacter l'équipe de la CVthèque";
                header('location:../view/formSignUp.php');
            }
        } catch (PDOException $e) {
            $db->rollBack();
            $_SESSION['messageSignValidation'] = "Erreur lors de l'inscription, merci de contacter l'équipe de la CVthèque";
            header('location:../view/formSignUp.php');
        }
    }
} else if (isset ($_POST['submitCompany'])) {

    // Recuperation des info company
    $company_name = $_POST['companyName'] ?? "";
    $siren = sanitize($_POST['siren'] ?? "");
    $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ?? "";
    $password = sanitize($POST['password'] ?? "");
    $phone = sanitize($_POST['phone'] ?? "");
    $town = sanitize($_POST['town'] ?? "");
    $postcode = sanitize($_POST['postcode'] ?? "");
    $country = sanitize($_POST['country'] ?? "");
    $sirenVerify = "";

    // Hash password using a strong algorithm
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Check for duplicate email
    $stmt = $pdo->prepare("SELECT mail FROM company_signin WHERE mail = :mail");
    $stmt->execute([':mail' => $mail]);

    //generate SIREN of the social reason
    $company_name = str_replace(' ', '%20', $company_name);
    $endpoint = "https://recherche-entreprises.api.gouv.fr/search?q=$company_name&page=1&per_page=1";
    $curl = curl_init($endpoint);
    curl_setopt_array($curl, [CURLOPT_RETURNTRANSFER => true]);
    $data = json_decode(curl_exec($curl), true);

    foreach ($data['results'] as $result) {
        $sirenVerify = $result['siren'];
    }
    curl_close($curl);

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        $_SESSION['messageSignValidation'] = "L'adressse mail est déjà utilisée";
        header('location:../view/formSignUp.php');
    } else {

        //if social reason is not good SirenVerify is not defind
        /*if ($sirenVerify == "") {
            $_SESSION['messageSignValidation'] = "Veuillez vérifier votre raison sociale et réessayer";
            header('location:../view/formSignUp.php');

        } else {
            //verify SIREN of API
            if ($siren == $sirenVerify) {*/
                try {
                    $pdo->beginTransaction();
                    $stmt = $pdo->prepare("INSERT INTO waiting_list (company_name, siren, mail, password, phone, town, postcode, country, waiting_since) VALUES (:company_name, :siren, :mail, :hashed_password, :phone, :town, :postcode, :country, CURRENT_TIMESTAMP)");
                    $stmt->execute([
                        ':company_name' => $company_name,
                        ':siren' => $siren,
                        ':mail' => $mail,
                        ':hashed_password' => $hashedPassword,
                        ':phone' => $phone,
                        ':town' => $town,
                        ':postcode' => $postcode,
                        ':country' => $country,
                    ]);
                    if ($stmt->rowCount() > 0) {
                        $pdo->commit();
                        $_SESSION['messageSignValidation'] = "Inscription entreprise réussie.";
                        header('location:../index.php');
                    } else {
                        $_SESSION['messageSignValidation'] = "Erreur lors de l'inscription, merci de contacter l'équipe de la CVthèque";
                        header('location:../view/formSignUp.php');
                    }
                } catch (PDOException $e) {
                    $pdo->rollBack();
                    $_SESSION['messageSignValidation'] = "Erreur lors de l'inscription, merci de contacter l'équipe de la CVthèque";
                    header('location:../view/formSignUp.php');
                }
                //if SIREN is not the same
            /*} else {
                $_SESSION['messageSignValidation'] = "Le numéro de SIREN saisi n'est pas le même que celui associé à votre raison sociale, veuillez vérifier votre raison sociale et réessayer";
                header('location:../view/formSignUp.php');
            }
        }*/
    }
}
?>