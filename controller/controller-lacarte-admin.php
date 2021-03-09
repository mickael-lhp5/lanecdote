<?php
session_start();

require_once '../model/database.php';
require_once '../model/model_platformulaire.php';

$readMealObj = new Meal;



$deleteMealObj = new Meal;
//On vérifie qu'une variable POST à été transmise
if (isset($_POST['deleteMeal'])) {
    $id = $_POST['deleteMeal'];
    $deleteMealObj->deleteMeal($id);
} 

$mealDetails = $readMealObj->readMeal();
