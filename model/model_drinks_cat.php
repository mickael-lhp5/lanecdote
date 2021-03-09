<?php


class Drinks_cat extends Database
{

    public function readDrinks()
    {

        $query = "SELECT *
            FROM mf_drinks_cat";

        $readDrinkCategoryQuery = $this->dataBase->query($query);
        $result = $readDrinkCategoryQuery->fetchAll();
        return $result;
    }
}
