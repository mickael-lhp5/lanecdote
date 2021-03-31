<?php
session_start();



require_once '../model/database.php';
require_once '../model/model_lesmenus.php';

$showMenuObj = new Menus;




$deleteMenuObj = new Menus;
//On vérifie qu'une variable POST à été transmise
if (isset($_POST['deleteMenu'])) {
    $id = $_POST['deleteMenu'];
    $deleteMenuObj->deleteMenu($id);
}

$menuDetails = $showMenuObj->showMenu();
