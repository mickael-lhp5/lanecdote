<?php
require_once '../model/database.php';
require_once '../model/model_drinks.php';


$readDrinkObj = new Drinks;



// $deleteMealObj = new Meal;
// //On vérifie qu'une variable POST à été transmise
// if (isset($_POST['deleteMeal'])) {
//     $id = $_POST['deleteMeal'];
//     $deleteMealObj->deleteMeal($id);
// } 

$drinkDetails = $readDrinkObj->readDrink();
