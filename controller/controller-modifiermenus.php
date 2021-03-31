<?php

session_start();



require_once '../model/database.php';
require_once '../model/model_lesmenus.php';

if (isset($_POST['enterModifyForm'])) {
    $menuObj = new Menus;
    $menuDetailsArray = $menuObj->readMenuModify($_POST['enterModifyForm']);
    $_SESSION['$menuDetails'] = $menuDetailsArray;
}

if (isset($_POST['modifier'])) {


    if (isset($_POST['menuName'])) {
        if (empty($_POST['menuName'])) {
            $errorMessages['menuName'] = "Veuillez entrer un nom de menu";
        }
    }

    if (empty($errorMessages)) {



        if (array_key_exists('notVisible', $_POST)) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 1;
        }

        // création du tableau $menuDetails dans la fonction
        $menuDetails = [
            'id' => $_SESSION['$menuDetails']['menu_image_id'],
            'menuName' => htmlspecialchars($_POST['menuName']),
            'menuImage' => empty($_POST['menuImage']) ? $_SESSION['$menuDetails']['menuimage_picture'] : htmlspecialchars($_POST['menuImage']),
            'notVisible' => htmlspecialchars($visible)
        ];
        // on injecte la variable du tableau $drinkDetails dans la fonction

        $menuObj = new Menus;

        if ($menuObj->updateMenu($menuDetails)) {
            $errorMessages['updateMenu'] = 'Votre menu a bien été modifié';
            $_SESSION['$menuDetails'] = $menuObj->readMenuModify($menuDetails['id']);
        } else {
            $errorMessages['updateMenu'] = 'erreur de connexion';
        }
    }
}

