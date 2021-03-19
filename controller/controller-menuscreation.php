<?php

session_start();

require_once '../model/database.php';
require_once '../model/model_lesmenus.php';


$regexName = "/^[a-zA-Z0-9ÀÁÂÃÄÅàáâãäåÒÓÔÕÖØòóôõöøÈÉÊËèéêëÇçÌÍÎÏìíîïÙÚÛÜùúûüÿÑñ\-\ ']+$/";

$imageMenu = "";



if (isset($_POST['addNewMenuBtn'])) {

    if (isset($_FILES["uploadFile"]) && $_FILES["uploadFile"]["error"] == 0) {
        $extensionsAllowed = ["image/jpeg", "image/png", "image/jpg"];
        $mimeTypeUploadedFile = mime_content_type($_FILES["uploadFile"]["tmp_name"]);

        if (in_array($mimeTypeUploadedFile, $extensionsAllowed)) {
            if ($_FILES["uploadFile"]["size"] <= 50000000000) {

                $pathInfoUploadedFile = pathinfo($_FILES["uploadFile"]["name"]);
                $newUploadedFileName = uniqid($pathInfoUploadedFile["filename"]);
                $fileExtension = $pathInfoUploadedFile["extension"];
                $targetDirectory = "../assets/img/imagemenu/";
                $newUploadedFileNamePlusTargetDirectory = $targetDirectory . $newUploadedFileName . "." . $fileExtension;

                if (move_uploaded_file($_FILES["uploadFile"]["tmp_name"], $newUploadedFileNamePlusTargetDirectory)) {
                    $imageMenu = $newUploadedFileName . "." . $fileExtension;
                } else {
                    $errorMessages = "Une erreur est survenue lors du téléchargement, veuillez réessayer";
                }
            } else {
                $errorMessage = "Votre fichier est trop lourd, la taille maximale est de 5MB.";
            }
        } else {
            $errorMessage = "Veuillez choisir un fichier image (jpg, jpeg ou png).";
        }
    }

    
    if(isset($_POST["menuName"])){
        if(!preg_match($regexName, $_POST["menuName"])){
            $errorMessages["menuName"] = "Veuillez respecter le format";
        }
        if(empty($_POST["menuName"])){
            $errorMessages["menuName"] = "Veuillez entrer un nom de menu";
        }
    }



    if (isset($_FILES["menuImage"]['name'])) {
        if (empty($_FILES["menuImage"]['name'])) {
            $errorMessages["menuImage"] = "Veuillez sélectionner un fichier.";
        }
    }


    if (empty($errorMessages)) {

        var_dump($_POST);


        if (array_key_exists('notVisible', $_POST)) {
            $visible = $_POST['notVisible'];
        } else {
            $visible = 1;
        }
        // création du tableau $imageDetails dans la fonction
        $imageDetails = [

            'menuName' => htmlspecialchars($_POST['menuName']),
            'menuImage' => ($_POST['menuImage']),
            'notVisible' => htmlspecialchars($visible),
        ];

        $addMenuObj = new Menus;

        if ($addMenuObj ->addMenu($imageDetails)) {

            $addNewImageInBase = true;
            $messages["addNewImage"] = "Image enregistrée.";
        } else {
            $errorMessages["addNewImage"] = "Erreur de connexion à la base de données.";
        }
    }





    //     // on injecte la variable du tableau $menuDetails dans la fonction

    //     if ($menuObj->updateMenu($menuDetails)) {
    //         $errorMessages['updateMenu'] = "Menu modifié";
    //         $getMenu = $menuObj->readDrinkModify($_SESSION['id']);
    //     } else {
    //         $errorMessages['updateMenu'] = "erreur de connexion";
    //     }
    // }
}
