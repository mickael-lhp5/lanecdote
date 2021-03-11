<?php

session_start();

require_once '../model/database.php';
// require_once '../model/model_drinks.php';
// require_once '../model/model_drinks_cat.php';


if (isset($_POST['modifier'])) {


    if (isset($_POST['menuName'])) {
        if (empty($_POST['menuName'])) {
            $errorMessages['menuName'] = "Veuillez entrer un nom de menu";
        }
    }


    if (empty($errorMessages)) {

        // var_dump($_POST);


        if (array_key_exists('notVisible', $_POST)) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 1;
        }
        // création du tableau $menuDetails dans la fonction
        $drinkDetails = [
            'id' => $_SESSION['id'],
            'menuName' => htmlspecialchars($_POST['menuName']),
            'menuImage' => htmlspecialchars($_POST['menuImage']),
            'notVisible' => htmlspecialchars($visible),
            'categoryDrink' => htmlspecialchars($_POST['categoryDrink'])
        ];

        // on injecte la variable du tableau $drinkDetails dans la fonction

        if ($menuObj->updateMenu($menuDetails)) {
            $errorMessages['updateMenu'] = "Menu modifié";
            $getMenu = $menuObj->readDrinkModify($_SESSION['id']);
        } else {
            $errorMessages['updateMenu'] = "erreur de connexion";
        }
    }
}
