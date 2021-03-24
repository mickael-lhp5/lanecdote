<?php

$identifiant = 'admin';
$password = 'gregetjerome';
$errorMessage = [];
if(isset($_SESSION['isconnected'])){

}else{

    $_SESSION['isconnected']=false;

}

if ($_SESSION['isconnected']==true) {
    header("Location: gestionplatetmenu.php");
}else{

    if (isset($_POST["connection"])) {
       
        if (isset($_POST['connection'])) {
            if ($_POST['identification'] == $identifiant && $_POST['password'] == $password) {
                $_SESSION['isconnected'] = true;
            } else {
    
                $errorMessages['identification'] = 'vos identifiants sont incorrects';
    
                $errorMessages['password'] = 'vos identifiants sont incorrects';
            }
        }
    
        if (count($errorMessages) == 0) {
            header("Location: gestionplatetmenu.php");
        }
    }
}

