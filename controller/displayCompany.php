<?php
session_start();
require "pdo.php";

// Select informations from company to displaying them
$query = "SELECT * from waiting_list";
$stmt = $pdo->prepare($query);
$stmt->execute();

if ($stmt->rowCount() > 0) 
{
    foreach ($stmt->fetchAll(PDO::FETCH_ASSOC) as $result)
    {
        $company_name = $result['company_name'];
        $siren = $result['siren'];
        $phone = $result['phone'];
        $postcode = $result['postcode'];
        $town = $result['town'];
        $id_company = $result['id_waiting'];
        echo str_replace(["{company_name}", "{siren}", "{phone}", "{postcode}", "{town}","{id_waiting}"], [$company_name, $siren, $phone, $postcode, $town, $id_company], file_get_contents("displayResultCompany.php"));
    }
}


?>