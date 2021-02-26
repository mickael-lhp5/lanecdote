<?php

require_once '../model/database.php';
require_once '../model/model_platformulaire.php';

var_dump($_POST);

$regexPrice = "/^[0-9]+.?[0-9]{0,2}$/";
$typeOfMealArray = [
    1 => 'Mise en bouche',
    2 => 'Entrée',
    3 => 'Plat',
    4 => 'Fromage',
    5 => 'Dessert',
    6 => 'Mignardises'
];

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

        $mealObj = new Meal;

          // création du tableau $mealDetails dans la fonction
          if (isset($_POST['notVisible'])) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 0;
        }

          $mealDetails = [
            'mealName'=> htmlspecialchars($_POST['mealName']),
            'mealComposition'=> htmlspecialchars($_POST['mealComposition']),
            'mealPrice'=> htmlspecialchars($_POST['mealPrice']),
            'mealSupp'=> htmlspecialchars($_POST['mealSupp']),
            'notVisible'=> htmlspecialchars($visible),
            'categoryMeal'=> htmlspecialchars($_POST['categoryMeal'])            
        ];


         // on injecte la variable du tableau $mealDetails dans la fonction

    if($mealObj->addMeal($mealDetails)){
        $errorMessages['addMeal'] = "Plat enregistré";
    }else {

        $errorMessages['addMeal'] = "erreur de connexion";
    }

   }

}
  




