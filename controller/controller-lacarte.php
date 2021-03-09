<?php
session_start();

require_once '../model/database.php';
require_once '../model/model_platformulaire.php';
require_once '../model/model_category_menucomponent.php';


$readMealGetObj = new Meal;
$readCategoryObj = new Category_menucomponent;

$categoryArray = $readCategoryObj->readCategory();













// $mainArray =  $readMealStarterObj->getMeals(3); 
// $dessertArray =  $readMealStarterObj->getMeals(5); 

