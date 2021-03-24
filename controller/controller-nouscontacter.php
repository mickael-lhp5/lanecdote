<?php
session_start();

$errorMessages = [];
$regexName = '/^[a-zA-Z]+$/';
$regexFirstName = '/^[a-zA-Z]+$/';
$regexMail = '/^[a-z0-9.-_]{20}+[@]{1}[a-z0-9]+[.]{1} [a-z]{2-4}+$/';


$showForm = true;


if (isset($_POST['submit'])) {

    if (isset($_POST["lastname"])) {
        if (!preg_match($regexName, $_POST['lastname'])) {
            $errorMessages['lastname'] = 'veuillez saisir un nom valide';
        }
        if (empty($_POST["lastname"])) {
            $errorMessages['lastname'] = 'veuillez saisir votre nom';
        }
    }


    if (isset($_POST['firstname'])) {
        if (!preg_match($regexFirstName, $_POST['firstname'])) {
            $errorMessages['firstname'] = 'veuillez saisir un prénom valide';
        }
        if (empty($_POST['firstname'])) {
            $errorMessages['firstname'] = 'veuillez saisir votre prénom';
        }
    }


    if (isset($_POST['email'])) {
        // if (!preg_match($regexMail, $_POST['email'])) {
        //     $errorMessages['email'] = 'veuillez saisir un email valide.';
        // }

        // var_dump(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL));
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errorMessages['email'] = 'veuillez saisir une adresse mail valide';
        }

        if (empty($_POST["email"])) {
            $errorMessages['email'] = 'veuillez saisir votre adresse mail';
        }
    }

    if (isset($_POST['myMessage'])) {
        // if (!preg_match($myMessage, $_POST['myMessage'])) {
        //     $errorMessages['myMessage'] = 'veuillez saisir un message valide.';
        // }
        if (empty($_POST['myMessage'])) {
            $errorMessages['myMessage'] = 'veuillez saisir votre message';
        }
    }

    if (count($errorMessages) == 0) {
        $lastname = htmlspecialchars($_POST['lastname']);
        $firstname =  htmlspecialchars($_POST['firstname']);
        $mail = htmlspecialchars($_POST['email']);        
        $myMessage = htmlspecialchars($_POST['myMessage']);

        $showForm = false;
    }
}
