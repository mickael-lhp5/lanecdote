<?php
class Meal extends Database

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

    // READ
    public function readMeal()
    {
        $query = "SELECT 
        `menucomponent_id` AS `id`,
        `menucomponent_name` AS `nom`, 
        `menucomponent_composition` AS `description`, 
        `menucomponent_price` AS `prix`, 
        `menucomponent_supp` AS `supplément`, 
        `menucomponent_visible` AS `visible`, 
        `mf_category_menucomponents`.`category_menucomponent_name` AS `Type de plat` 
        FROM `mf_menucomponents` 
        INNER JOIN mf_category_menucomponents 
        ON mf_menucomponents.category_menucomponent_id = mf_category_menucomponents.category_menucomponent_id";       
        $readMealQuery = $this->dataBase->query($query);
        $result = $readMealQuery->fetchAll();
        return $result;
    }



    //UPDATE
    public function readMealModify($id){
        $query =  $query = "SELECT 
        `menucomponent_id` AS `id`, 
        `menucomponent_name` AS `nom`, 
        `mf_menucomponents`.`category_menucomponent_id` AS `typeplat`, 
        `menucomponent_composition` AS `description`, 
        `menucomponent_price` AS `prix`, 
        `menucomponent_supp` AS `supplément`, 
        `menucomponent_visible` AS `visible`, 
        `mf_category_menucomponents`.`category_menucomponent_name` AS `Type de plat` 
        FROM `mf_menucomponents` 
        INNER JOIN mf_category_menucomponents 
        ON mf_menucomponents.category_menucomponent_id = mf_category_menucomponents.category_menucomponent_id
        WHERE `menucomponent_id` = '$id'";

        $readMealModifyQuery = $this->dataBase->query($query);
        $result = $readMealModifyQuery->fetch();
        return $result;
    }

    public function updateMeal(array $mealDetails)
    {
        // requete me permettant de modifier mon plat
        $query = 'UPDATE `mf_menucomponents` SET
        `menucomponent_name` = :menucomponent_name,
        `menucomponent_composition` = :menucomponent_composition,
        `menucomponent_price` = :menucomponent_price,
        `menucomponent_supp` = :menucomponent_supp,
        `menucomponent_visible` = :menucomponent_visible,
        `category_menucomponent_id` = :category_menucomponent_id
        WHERE `menucomponent_id` = :id';

        // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL 
        $updateMealQuery = $this->dataBase->prepare($query);

        // On bind les values pour renseigner les marqueurs nominatifs
        $updateMealQuery->bindvalue(':menucomponent_name', $mealDetails['mealName'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':menucomponent_composition', $mealDetails['mealComposition'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':menucomponent_price', $mealDetails['mealPrice'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':menucomponent_supp', $mealDetails['mealSupp'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':menucomponent_visible', $mealDetails['notVisible'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':category_menucomponent_id', $mealDetails['categoryMeal'], PDO::PARAM_STR);
        $updateMealQuery->bindvalue(':id', $mealDetails['id'], PDO::PARAM_STR);
        if ($updateMealQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }

 //DELETE

    public function deleteMeal($id)
    {        
        $query = "DELETE FROM `mf_menucomponents` WHERE `menucomponent_id` = '$id' ";
        $this->dataBase->query($query);
        
    }


// READ LA CARTE COTE CLIENT

public function getMeals($idCat)
{

   $query = "SELECT menucomponent_name, menucomponent_composition, menucomponent_price , menucomponent_supp , menucomponent_visible, category_menucomponent_id
    FROM lanecdote.mf_menucomponents
    WHERE category_menucomponent_id = $idCat AND menucomponent_visible = 1";

    $readGetMealQuery = $this->dataBase->query($query);
    $result = $readGetMealQuery->fetchAll();
    return $result;
}

}
