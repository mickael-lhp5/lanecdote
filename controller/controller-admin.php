<?php
$identifiant = 'admin';
$password = "gregetjerome";
$errorMessage = [];


if (isset($_POST['connexion'])) {
    if ($_POST['identification'] == $identifiant && $_POST['password'] == $password) {

        
    } else {

        $errorMessages['identification'] = 'vos identifiants sont incorrects';
        // require("http://lanecdote/admin.php");


        //$errorMessages['password'] = 'veuillez saisir votre mot de passe';

    }
}






// if (isset($_POST["lastname"])) {
//     if (!preg_match($regexName, $_POST['lastname'])) {
//         $errorMessages['lastname'] = 'veuillez saisir un nom valide';
//     }
//     if (empty($_POST["lastname"])) {
//         $errorMessages['lastname'] = 'veuillez saisir votre nom';
//     }
// }