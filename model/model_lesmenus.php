<?php
class Menus extends Database
{
    //CREATE

    /**
     * 
     * @param array $menuDetail contient toutes les informations du addMenu
     * @return boolean permet de savoir si la requete est bien passée
     */
    public function addMenu(array $menuDetails)

    {
        // je met en place des marqueurs nominatifs pour preparer ma requete avec des valeurs recuperées via form
        $query = "INSERT INTO `mf_menuimage`(`menuimage_name`,`menuimage_picture`, `menuimage_visible`) 
        VALUE(:menuimage_name, :menuimage_picture, :menuimage_visible)";

        //nous preparons notre requete
        $addMenuQuery = $this->dataBase->prepare($query);

        //je bind mes valeurs a l'aide de la méthode bindvalue()
        $addMenuQuery->bindvalue(':menuimage_name', $menuDetails['menuName'], PDO::PARAM_STR);
        $addMenuQuery->bindvalue(':menuimage_picture', $menuDetails['menuImage'], PDO::PARAM_STR);
        $addMenuQuery->bindvalue(':menuimage_visible', $menuDetails['notVisible'], PDO::PARAM_STR);
       

        // tester et executer la requete pour afficher le message d'erreurs
        if ($addMenuQuery->execute()) {
            return true;
        } else {
            return false;
        }
    }



// READ LE MENU COTE ADMIN

public function showMenu()
{
    $query = "SELECT `menu_image_id`,`menuimage_name`, `menuimage_picture`, `menuimage_visible` FROM mf_menuimage";
  
    $showMenuQuery = $this->dataBase->query($query);
    $result = $showMenuQuery->fetchAll();
    return $result;     
}


// READ LA CARTE COTE CLIENT

public function showMenuClientSide()
{

   $query = "SELECT `menuimage_name`, `menuimage_picture`, `menuimage_visible`, `menu_image_id`
    FROM `mf_menuimage`
    WHERE `menuimage_visible` = 1";

    $showMenuClientSideQuery = $this->dataBase->query($query);
    $result = $showMenuClientSideQuery->fetchAll();
    return $result;
}



//UPDATE
public function readMenuModify($id){
    $query = "SELECT 
    `menu_image_id`, 
    `menuimage_name`,
    `menuimage_picture`,
    `menuimage_visible` 
    FROM `mf_menuimage` 
    WHERE `menu_image_id` = '$id'";

    $readMenuModifyQuery = $this->dataBase->query($query);
    $result = $readMenuModifyQuery->fetch();
    return $result;
}

public function updateMenu(array $menuDetails){
    

    // requete me permettant de modifier mon plat
    $query = "UPDATE `mf_menuimage` SET
    `menuimage_name` = :menuimage_name,
    `menuimage_picture` = :menuimage_picture,
    `menuimage_visible` = :menuimage_visible
    WHERE `menu_image_id` = :menu_image_id";

    // je prepare requête à l'aide de la methode prepare pour me premunir des injections SQL 
    $updateMenuQuery = $this->dataBase->prepare($query);

    // On bind les values pour renseigner les marqueurs nominatifs
    $updateMenuQuery->bindvalue(':menuimage_name', $menuDetails['menuName'], PDO::PARAM_STR);
    $updateMenuQuery->bindvalue(':menuimage_picture', $menuDetails['menuImage'], PDO::PARAM_STR);
    $updateMenuQuery->bindvalue(':menuimage_visible', $menuDetails['notVisible'], PDO::PARAM_STR);
    $updateMenuQuery->bindvalue(':menu_image_id', $menuDetails['id'], PDO::PARAM_STR);

    if ($updateMenuQuery->execute()) {
        var_dump('ok');
        return true;
    } else {
        return false;
    }
}









}