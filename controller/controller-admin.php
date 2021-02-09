<?php
$identifiant = 'admin';
$password = "gregetjerome";
$errorMessage = [];


if (isset($_POST["connection"])) {

    if (isset($_POST['connection'])) {
        if ($_POST['identification'] == $identifiant && $_POST['password'] == $password) {
            
        } else {

            $errorMessages['identification'] = 'vos identifiants sont incorrects';

            $errorMessages['password'] = 'vos identifiants sont incorrects';
        }
    }

    if (count($errorMessages) < 1) {
        header("Location: gestionplatetmenu.php");
    }
}
