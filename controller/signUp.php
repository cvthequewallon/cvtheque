<?php
require_once "pdo.php";

// Input validation and sanitization
function sanitize($data) {
    $data = trim($data);  // Remove whitespace
    $data = htmlspecialchars($data);  // Prevent XSS attacks
    return $data;
}

if(isset($_POST['submitStudent'])) {

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
        echo "L'adresse e-mail est déjà utilisée.";
        exit();
    }else {
    // Use prepared statements with placeholders for all values
        try {
            $pdo->beginTransaction();

            $stmt = $pdo->prepare("INSERT INTO user_signin VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, CURRENT_TIMESTAMP)");
            $stmt->execute([$first_name, $last_name, $mail, $hashedPassword, $phone, $birthday, $town, $postcode, $country]);

            if ($stmt->rowCount() > 0) {
                $pdo->commit();
                header('location:../view/registerForm.html');
            } else {
                echo "Erreur lors de l'inscription.";
            }
        } catch (PDOException $e) {
            $db->rollBack();
            echo "Erreur lors de l'inscription : " . $e->getMessage();
        }
    }
}else if(isset($_POST['submitCompany'])) 
{

    // Recuperation des info company
    $company_name = sanitize($_POST['companyName']??"");
    $siren = sanitize($_POST['siren']??"");
    $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)??"";
    $password = sanitize($POST['password']??"");
    $phone = sanitize($_POST['phone']??"");
    $town = sanitize($_POST['town']??"");
    $postcode = sanitize($_POST['postcode']??"");
    $country = sanitize($_POST['country']??"");

    // Hash password using a strong algorithm
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    
    // Check for duplicate email
    $stmt = $pdo->prepare("SELECT mail FROM company_signin WHERE mail = :mail");
    $stmt->execute([':mail' => $mail]);

    if ($stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "L'adresse e-mail est déjà utilisée.";
        exit();
    }else {
            try {
                $pdo->beginTransaction();

                $stmt = $pdo->prepare("INSERT INTO company_signin (company_name, siren, mail, password, phone, town, postcode, country, signin_since) VALUES (:company_name, :siren, :mail, :hashed_password, :phone, :town, :postcode, :country, CURRENT_TIMESTAMP)");
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
                    header('location:../view/registerForm.html');
                } else {
                    echo "Erreur lors de l'inscription.";
                }
            } catch (PDOException $e) {
                $pdo->rollBack();
                echo "Erreur lors de l'inscription : " . $e->getMessage();
            }
        }
    }
?>
