<?php
class Drinks extends Database {
// CREATE DRINKS

/**
     * 
     * @param array $drinkDetail contient toutes les informations du addDrink
     * @return boolean permet de savoir si la requete est bien passée
     */

    public function addDrink(array $drinkDetails)

    {
        // je met en place des marqueurs nominatifs pour preparer ma requete avec des valeurs recuperées via form
        $query = "INSERT INTO `mf_drinks` (`drink_name`, `drink_price`, `drink_visible`, `drinks_cat_id`) 
        VALUE (:drink_name, :drink_price, :drink_visible, :drinks_cat_id)";

        //nous preparons notre requete
        $addDrinkQuery = $this->dataBase->prepare($query);


        //je bind mes valeurs a l'aide de la méthode bindvalue()
        $addDrinkQuery->bindvalue(':drink_name', $drinkDetails['drinkName'], PDO::PARAM_STR);
        $addDrinkQuery->bindvalue(':drink_price', $drinkDetails['drinkPrice'], PDO::PARAM_STR);
        $addDrinkQuery->bindvalue(':drink_visible', $drinkDetails['notVisible'], PDO::PARAM_STR);
        $addDrinkQuery->bindvalue(':drinks_cat_id', $drinkDetails['categoryDrink'], PDO::PARAM_STR);

        // tester et executer la requete pour afficher le message d'erreurs
        if ($addDrinkQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

// READ
public function readDrink()
{
    $query = "SELECT 
    `drink_id` AS `id`,
    `drink_name` AS `nom`, 
    `drink_price` AS `prix`, 
    `drink_visible` AS `visible`, 
    `mf_drinks_cat`.`drinks_cat_name` AS `Type de boisson` 
    FROM mf_drinks
    INNER JOIN mf_drinks_cat 
    ON mf_drinks.drinks_cat_id = mf_drinks_cat.drinks_cat_id;";       
    $readDrinkQuery = $this->dataBase->query($query);
    $result = $readDrinkQuery->fetchAll();
    return $result;
}








}


