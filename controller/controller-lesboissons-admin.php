<?php
session_start();

require_once '../model/database.php';
require_once '../model/model_drinks.php';


$readDrinkObj = new Drinks;



$deleteDrinkObj = new Drinks;
//On vérifie qu'une variable POST à été transmise
if (isset($_POST['deleteDrink'])) {
    $id = $_POST['deleteDrink'];
    $deleteDrinkObj->deleteDrink($id);
}

$drinkDetails = $readDrinkObj->readDrink();
