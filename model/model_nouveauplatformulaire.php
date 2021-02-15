<?php

// se connecter à la bdd

function dbConnect(){

    $dbObject = new PDO('mysql:host=localhost;dbname=lanecdote;charset=utf8', 'root', '');
    $dbObject->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbObject;

}

function nouveauPlatFormulaire($name, $composition, $price, $supp, $visible, $category){

    $dbObject = dbConnect();

    $requete = $dbObject->prepare('INSERT INTO mf_menucomponents(menucomponent_name,menucomponent_composition, menucomponent_price, menucomponent_supp,menucomponent_visible, category_menucomponent_id) 
    VALUE(:menucomponent_name, :menucomponent_composition, :menucomponent_price, :menucomponent_supp, :menucomponent_visible, :category_menucomponent_id)');

    $requete->bindvalue(':menucomponent_name', $name);
    $requete->bindvalue(':menucomponent_composition', $composition);
    $requete->bindvalue(':menucomponent_price', $price);
    $requete->bindvalue(':menucomponent_supp', $supp);
    $requete->bindvalue(':menucomponent_visible', $visible);
    $requete->bindvalue(':category_menucomponent_id', $category);

    $requete->execute();
}

//faire une fonction contenant une requete select* / le return activera la fonction


// se connecter à la bdd
// function dbConnection(){

//     try
//     {
//         $dbObject = new PDO('mysql:host=localhost;dbname=lanecdote;charset=utf8', 'root', '');
//         return $dbObject;
//     }
//     catch (Exception $e)
//     {
//             die('Erreur : ' . $e->getMessage());
//     }
    
// }

// fonction pour recuperer requete sql

// function addMeal(){

//     $dbObject = dbConnection();

//     $reponse = $dbObject->query("INSERT INTO mf_menucomponents (menucomponent_name, menucomponent_composition,menucomponent_price, menucomponent_supp, category_menucomponent_id)
//     VALUE
//     ("Le  Saumon exotique","Tartare de saumon, avocat et mangue, vinaigrette exotique","6.90", NULL,2)");

//     return $reponse;

// }
