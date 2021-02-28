<?php

require_once '../model/database.php';
require_once '../model/model_drinks.php';

var_dump($_POST);

$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";
$typeOfDrinkArray = [
    1 => 'Vin Rouge',
    2 => 'Vin Blanc',
    3 => 'Vin Rosé',
    4 => 'Bière',

];

if (isset($_POST['valider'])) {


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

    if (empty($errorMessages)) {

        $drinkObj = new Drinks;

        // création du tableau $mealDetails dans la fonction
        if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 0;
        }

        $drinkDetails = [
            'drinkName' => htmlspecialchars($_POST['drinkName']),
            'drinkPrice' => htmlspecialchars($_POST['drinkPrice']),
            'notVisible' => htmlspecialchars($visible),
            'categoryDrink' => htmlspecialchars($_POST['categoryDrink'])
        ];


        // on injecte la variable du tableau $mealDetails dans la fonction

        if ($drinkObj->addDrink($drinkDetails)) {
            $errorMessages['addDrink'] = "Boisson enregistré";
        } else {

            $errorMessages['addDrink'] = "erreur de connexion";
        }
    }




    
}
