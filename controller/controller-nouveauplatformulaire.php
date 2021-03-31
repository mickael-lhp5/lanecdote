
<?php
session_start();
require_once '../model/database.php';
require_once '../model/model_platformulaire.php';
require_once '../model/model_category_menucomponent.php';

$mealObj = new Meal;


$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";

$categoryObj = new Category_menucomponent;
$categoryArray =  $categoryObj->readCategory();


$typeOfMealArray = [];
foreach ($categoryArray as $value) {
    $typeOfMealArray[$value['category_menucomponent_id']] = $value['category_menucomponent_name'];
}


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


    if (isset($_POST['mealPrice'])) {

        if (empty($_POST['mealPrice'])) {
            $errorMessages['mealPrice'] = "Vueillez entrer un prix";
        }
        if (!preg_match($regexPrice, $_POST['mealPrice'])) {
            $errorMessages['mealPrice'] = 'veuillez saisir un prix valide';
        }
    }


    if (isset($_POST['mealSupp'])) {
        $mealSupp = $_POST['mealSupp'];
        if (!preg_match($regexPrice, $_POST['mealSupp'])) {
            $errorMessages['mealSupp'] = 'veuillez saisir un prix valide';
        }
        if (empty($_POST['mealSupp'])) {
            $mealSupp = NULL;
            unset($errorMessages['mealSupp']);
        }
    }

    if (empty($errorMessages)) {
        if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 1;
        }
        // création du tableau $mealDetails dans la fonction
        $mealDetails = [
            'mealName' => htmlspecialchars($_POST['mealName']),
            'mealComposition' => htmlspecialchars($_POST['mealComposition']),
            'mealPrice' => htmlspecialchars($_POST['mealPrice']),
            'mealSupp' => $mealSupp,

            'notVisible' => ($visible),
            'categoryMeal' => htmlspecialchars($_POST['categoryMeal'])
        ];

        // on injecte la variable du tableau $mealDetails dans la fonction

        if ($mealObj->addMeal($mealDetails)) {
            $errorMessages['addMeal'] = "Votre plat a bien été enregistré";
        } else {

            $errorMessages['addMeal'] = "erreur de connexion";
        }
    }
}
