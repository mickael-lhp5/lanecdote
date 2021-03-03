<?php

session_start();

require_once '../model/database.php';
require_once '../model/model_drinks.php';
require_once '../model/model_drinks_cat.php';


$drinkObj = new Drinks;
$categoryDrinkObj = new Drinks_cat;

$categoryDrinkArray = $categoryDrinkObj->readCategory();

$errorMessages=[];
$typeOfDrinkArray = [];
foreach($categoryDrinkArray as $value){
    $typeOfDrinkArray [$value['drinks_cat_id']] = $value['drinks_cat_name'];
}



$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";
if (!empty($_POST['enterModifyDrinkForm'])) {
    $_SESSION['id'] = $_POST['enterModifyDrinkForm'];
}

$getDrink = $drinkObj->readDrinkModify($_SESSION['id']);




if (isset($_POST['modifier'])) {


    if (isset($_POST['drinkName'])) {
        if (empty($_POST['drinkName'])) {
            $errorMessages['drinkName'] = "Veuillez entrer un nom de boisson";
        }
    }

    if (isset($_POST['drinkPrice'])) {

        if (empty($_POST['drinkPrice'])) {
            $errorMessages['drinkPrice'] = "Veuillez entrer un prix";
        }
        if (!preg_match($regexPrice, $_POST['drinkPrice'])) {
            $errorMessages['drinkPrice'] = 'veuillez saisir un prix valide';
        }
    }


    var_dump($errorMessages);
    if (empty($errorMessages)) {

        // création du tableau $drinkDetails dans la fonction
        if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 0;
        }

        $drinkDetails = [
            'id' => $_SESSION['id'],
            'drinkName' => htmlspecialchars($_POST['drinkName']),
            'drinkPrice' => htmlspecialchars($_POST['drinkPrice']),
            'notVisible' => htmlspecialchars($visible),
            'categoryDrink' => htmlspecialchars($_POST['categoryDrink'])
        ];

var_dump($drinkDetails);
        // on injecte la variable du tableau $drinkDetails dans la fonction

        if ($drinkObj->updateDrink($drinkDetails)) {
            $errorMessages['updateDrink'] = "Boisson modifié";
        } else {

            $errorMessages['updateDrink'] = "erreur de connexion";
        }
    }
}
