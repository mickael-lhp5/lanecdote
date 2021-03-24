<?php

require_once '../model/database.php';
require_once '../model/model_drinks.php';
require_once '../model/model_drinks_cat.php';

// var_dump($_POST);

$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";

$DrinkObj = new Drinks;
$categoryDrinkObj = new Drinks_cat;


$categoryDrinkArray = $categoryDrinkObj->readDrinks();


$errorMessages = [];
$typeOfDrinkArray = [];



foreach ($categoryDrinkArray as $value) {
   $typeOfDrinkArray[$value['drinks_cat_id']] = $value['drinks_cat_name']; 
}


if (isset($_POST['valider'])) {


    if (isset($_POST['drinkName'])) {
        if (empty($_POST['drinkName'])) {
            $errorMessages['drinkName'] = 'Veuillez entrer un nom de boisson';
        }
    }

    if (isset($_POST['drinkPrice'])) {

        if (empty($_POST['drinkPrice'])) {
            $errorMessages['drinkPrice'] = 'Veuillez entrer un prix';
        }
        if (!preg_match($regexPrice, $_POST['drinkPrice'])) {
            $errorMessages['drinkPrice'] = 'veuillez saisir un prix valide';
        }
    }

    if (empty($errorMessages)) {

        // création du tableau $drinkDetails dans la fonction
      
        if (array_key_exists('notVisible', $_POST)) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 1;
        }

        $drinkDetails = [
            'drinkName' => htmlspecialchars($_POST['drinkName']),
            'drinkPrice' => htmlspecialchars($_POST['drinkPrice']),
            'notVisible' => htmlspecialchars($visible),
            'categoryDrink' => htmlspecialchars($_POST['categoryDrink'])
        ];



        // on injecte la variable du tableau $drinkDetails dans la fonction

        if ($DrinkObj->addDrink($drinkDetails)) {
            $errorMessages['addDrink'] = 'Boisson enregistrée';
        } else {

            $errorMessages['addDrink'] = 'erreur de connexion';
        }
    }
}
