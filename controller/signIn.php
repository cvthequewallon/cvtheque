<?php
require "pdo.php";
session_start();

function checkEmailExistence($mail, $table = "user_signin") {
    $stmt = $pdo->prepare("SELECT mail FROM ? WHERE mail = :mail");
    $stmt->execute([$table, ":mail" => $mail]);
    return $stmt->fetchColumn(); // Returns mail if found, otherwise null
  }
  
  // Example usage:
  $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ?? "";
  $password = sanitize($_POST['password'] ?? "");
  
  // Check for user email:
  if (checkEmailExistence($mail)) {
    // Try for select id & password
    try {
      $stmt = $pdo->prepare("SELECT id_user ,password from user_signin where mail = :mail");
      $stmt->execute([":mail" => $mail]);
      $result = $stmt->fetch();
      if(password_verify($password ,$result['password']))
      {
        // Store the user id
        $_SESSION['id_user'] = $result['id_user'];
        echo $_SESSION['id_user'];
      }
    } catch (PDOException $e) {
      $db->rollBack();
      echo "Erreur lors de la connexion : " . $e->getMessage();
  }
  }
  
  // Check for company email:
  if (checkEmailExistence($mail, "company_signin")) {
    echo "Company email exists";
  }

?>