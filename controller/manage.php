<?php 
session_start();
require "pdo.php";

$id_waiting = $_POST['id_waiting'];

if(isset($_POST["Validate"])) {
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
                    } else {
                        echo "Erreur lors de l'acceptation.";
                    }
}
elseif(isset($_POST['Refuse'])) {
    // Delete informations from the waiting_list table
    $query = "DELETE FROM `waiting_list` WHERE id_waiting = :id_waiting";
    $stmt = $pdo->prepare($query);
    $stmt->execute([":id_waiting"=>$id_waiting]);

    Header("Location:../view/dashboard/waitingCompany.php");

}

?>