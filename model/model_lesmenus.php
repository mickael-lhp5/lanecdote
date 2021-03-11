<?php
class Menus extends Database
{
    //CREATE

    /**
     * 
     * @param array $mealDetail contient toutes les informations du addMeal
     * @return boolean permet de savoir si la requete est bien passée
     */
    public function addMeal(array $mealDetails)

    {
        // je met en place des marqueurs nominatifs pour preparer ma requete avec des valeurs recuperées via form
        $query = "INSERT INTO `mf_menucomponents`(`menucomponent_name`,`menucomponent_composition`, `menucomponent_price`, `menucomponent_supp`, `menucomponent_visible`, `category_menucomponent_id`) 
        VALUE(:menucomponent_name, :menucomponent_composition, :menucomponent_price, :menucomponent_supp, :menucomponent_visible, :category_menucomponent_id)";

        //nous preparons notre requete
        $addMealQuery = $this->dataBase->prepare($query);


        //je bind mes valeurs a l'aide de la méthode bindvalue()
        $addMealQuery->bindvalue(':menucomponent_name', $mealDetails['mealName'], PDO::PARAM_STR);
        $addMealQuery->bindvalue(':menucomponent_composition', $mealDetails['mealComposition'], PDO::PARAM_STR);
        $addMealQuery->bindvalue(':menucomponent_price', $mealDetails['mealPrice'], PDO::PARAM_STR);
        $addMealQuery->bindvalue(':menucomponent_supp', $mealDetails['mealSupp'], PDO::PARAM_STR);
        $addMealQuery->bindvalue(':menucomponent_visible', $mealDetails['notVisible'], PDO::PARAM_STR);
        $addMealQuery->bindvalue(':category_menucomponent_id', $mealDetails['categoryMeal'], PDO::PARAM_STR);

        // tester et executer la requete pour afficher le message d'erreurs
        if ($addMealQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }



}
