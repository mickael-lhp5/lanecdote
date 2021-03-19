<?php 

class Category_menucomponent extends Database{

        public function readCategory(){

            $query = "SELECT * FROM mf_category_menucomponents";

            $readCategoryQuery = $this->dataBase->query($query);
            $result = $readCategoryQuery->fetchAll();
            return $result;

        }
}