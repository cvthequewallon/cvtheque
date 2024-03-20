<?php
    //MESSAGE OF INSCRIPTION
    session_start();
    if (isset ($_SESSION['messageSignValidation'])) {
        echo "{$_SESSION['messageSignValidation']}";
        unset($_SESSION["messageSignValidation"]);
    }
?>