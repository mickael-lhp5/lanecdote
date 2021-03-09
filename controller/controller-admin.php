<?php
session_start();

$identifiant = 'admin';
$password = "gregetjerome";
$errorMessage = [];
$_SESSION['isconnected']=false;

if (isset($_POST["connection"])) {

    if (isset($_POST['connection'])) {
        if ($_POST['identification'] == $identifiant && $_POST['password'] == $password) {
            $_SESSION['isconnected'] = true;
        } else {

            $errorMessages['identification'] = 'vos identifiants sont incorrects';

            $errorMessages['password'] = 'vos identifiants sont incorrects';
        }
    }

    if (count($errorMessages) < 1) {
        header("Location: gestionplatetmenu.php");
    }
}
