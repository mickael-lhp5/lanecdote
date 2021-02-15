<?php

require_once '../model/model_nouveauplatformulaire.php';

$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";


if (isset($_POST['valider'])) {


    if (isset($_POST['mealName'])) {
        if (empty($_POST['mealName'])) {
            $errorMessages['mealName'] = "Veuillez entrer un nom de plat";
        }
    }

    if (isset($_POST['mealComposition'])) {
        if (empty($_POST['mealComposition'])) {
            $errorMessages['mealComposition'] = "Veuillez entrer une composition";
        }
    }


    if(isset($_POST['mealPrice'])){

        if(empty($_POST['mealPrice'])) {
        $errorMessages['mealPrice'] = "Vueillez entrer un prix";
        }
        if (!preg_match($regexPrice, $_POST['mealPrice'])) {
            $errorMessages['mealPrice'] = 'veuillez saisir un prix valide';
        }
    }


    if (empty($errorMessages)) {

        $name = $_POST['mealName'];
        $composition = $_POST['mealComposition'];
        $price = $_POST['mealPrice'];
        $supp = $_POST['mealSupp'];
        if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 0;
        }
        $category = $_POST['categoryMeal'];

        nouveauPlatFormulaire($name, $composition, $price, $supp, $visible, $category);
    }

}