<?php
session_start();

var_dump($_SESSION);

require_once '../model/database.php';
require_once '../model/model_lesmenus.php';

$showMenuObj = new Menus;





// $deleteMealObj = new Meal;
// //On vérifie qu'une variable POST à été transmise
// if (isset($_POST['deleteMeal'])) {
//     $id = $_POST['deleteMeal'];
//     $deleteMealObj->deleteMeal($id);
// } 

$imageDetails = $showMenuObj->showMenu();
