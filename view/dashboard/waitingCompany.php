<?php
    //MESSAGE OF INSCRIPTION
    session_start();
    if (isset ($_SESSION['messageSignValidation'])) {
        echo "{$_SESSION['messageSignValidation']}";
        unset($_SESSION["messageSignValidation"]);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Waiting List | Cvthèque</title>
</head>
<body>
    <h1>Entreprises en attente de validation</h1>
    <section>
        <table>
            <!-- En-tête de la liste -->
            <thead>
                <tr>
                    <td>Nom de l'entreprise</td>
                    <td>Numéro de siren</td>
                    <td>Numéro de téléphone</td>
                    <td>Code postal</td>
                    <td>ville</td>
                </tr>
            </thead>
            <!-- Corp de la liste -->
            <?php require "../../controller\displayCompany.php";  ?>
        </table>
    </section>
</body>
</html>


