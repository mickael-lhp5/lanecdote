<?php
require_once '../model/database.php';
require_once '../model/model_drinks.php';
require_once '../model/model_drinks_cat.php';

$readDrinkObj = new Drinks;
$readDrinkCatObj = new Drinks_cat;


$categoryDrinkArray = $readDrinkCatObj->readDrinks();
