<?php
require "pdo.php";
session_start();

function checkEmailExistence($mail, $table = "user_signin") {
    require "pdo.php";
    $stmt = $pdo->prepare("SELECT mail FROM $table WHERE mail = :mail");
    $stmt->execute([":mail" => $mail]);
    return $stmt->fetchColumn(); // Returns mail if found, otherwise null
  }
  
  // Example usage:
  $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ?? "";
  $password = $_POST['password'] ?? "";
  
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
        header('location:../view/dashboardStudent.php');
      }
    } catch (PDOException $e) {
      $db->rollBack();
      $_SESSION['messageSignValidation'] = "Erreur lors de la connexion, merci de contacter l'équipe de la CVthèque";
      header('location:../view/formSignIn.php');
  }
  }

  // Check for company email:
  if (checkEmailExistence($mail, "company_signin")) {
    // Try for select id & password
    try {
      $stmt = $pdo->prepare("SELECT id_company ,password from company_signin where mail = :mail");
      $stmt->execute([":mail" => $mail]);
      $result = $stmt->fetch();
      if(password_verify($password ,$result['password']))
      {
        // Store the user id
        $_SESSION['id_company'] = $result['id_company'];
        echo $_SESSION['id_company'];
        header('location:../view/dashboardCompany.php');
      }
    } catch (PDOException $e) {
      $db->rollBack();
      $_SESSION['messageSignValidation'] = "Erreur lors de la connexion, merci de contacter l'équipe de la CVthèque";
      header('location:../view/formSignIn.php');
  }
}
  // Check for teacher email:
    if (checkEmailExistence($mail, "teacher_signin")) {
      // Try for select id & password
      try {
        $stmt = $pdo->prepare("SELECT id_admin, password from teacher_signin where mail = :mail");
        $stmt->execute([":mail" => $mail]);
        $result = $stmt->fetch();
        if($result['password'] == $password )
      {
        // Store the user id
        $_SESSION['id_admin'] = $result['id_admin'];
        echo $_SESSION['id_admin'];
        header("Location:../view/dashboard/waitingCompany.php");
      }
    } catch (PDOException $e) {
      $db->rollBack();
      $_SESSION['messageSignValidation'] = "Erreur lors de la connexion, merci de contacter l'équipe de la CVthèque";
      header('location:../view/formSignIn.php');
    }
    }else {
      $_SESSION['messageSignValidation'] = "Identifiant ou mot de passe invalide";
      header('location:../view/formSignIn.php');
    }
?>