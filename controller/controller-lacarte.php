<?php
require_once '../model/database.php';
require_once '../model/model_platformulaire.php';
require_once '../model/model_category_menucomponent.php';


$readMealStarterObj = new Meal;
$readCategoryObj = new Category_menucomponent;

$categoryArray = $readCategoryObj->readCategory();













// $mainArray =  $readMealStarterObj->getMeals(3); 
// $dessertArray =  $readMealStarterObj->getMeals(5); 

