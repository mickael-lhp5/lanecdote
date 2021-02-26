<?php

session_start();

require_once '../model/database.php';
require_once '../model/model_platformulaire.php';


$mealObj = new Meal;

$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";
$typeOfMealArray = [
    1 => 'Mise en bouche',
    2 => 'Entrée',
    3 => 'Plat',
    4 => 'Fromage',
    5 => 'Dessert',
    6 => 'Mignardises'
];

if (!empty($_POST['enterModifyForm'])) {
    $_SESSION['id'] = $_POST['enterModifyForm'];
}

$getMeal = $mealObj->readMealModify($_SESSION['id']);
var_dump($id);
var_dump($getMeal);

if (isset($_POST['modifier'])) {


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

    if (isset($_POST['mealPrice'])) {

        if (empty($_POST['mealPrice'])) {
            $errorMessages['mealPrice'] = "Veuillez entrer un prix";
        }
        if (!preg_match($regexPrice, $_POST['mealPrice'])) {
            $errorMessages['mealPrice'] = 'veuillez saisir un prix valide';
        }
    }

    if (empty($errorMessages)) {

        $mealObj = new Meal;

    
        if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 0;
        }

    // création du tableau $mealDetails dans la fonction
        $mealDetails = [
            'id' => htmlspecialchars($_POST['modifier']),
            'mealName' => htmlspecialchars($_POST['mealName']),
            'mealComposition' => htmlspecialchars($_POST['mealComposition']),
            'mealPrice' => htmlspecialchars($_POST['mealPrice']),
            'mealSupp' => htmlspecialchars($_POST['mealSupp']),
            'notVisible' => htmlspecialchars($visible),
            'categoryMeal' => htmlspecialchars($_POST['categoryMeal'])
        ];

       
         

        // on injecte la variable du tableau $mealDetails dans la fonction

        if ($mealObj->updateMeal($mealDetails)) {
            $errorMessages['updateMeal'] = "Plat modifié";
        } else {
            $errorMessages['updateMeal'] = "erreur de connexion lors de la modification";
        }
    }

}

?>


