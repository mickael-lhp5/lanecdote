<?php
session_start();

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Le restaurant</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,900;1,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700i|Fira+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">

</head>
<body>
    <div id="contentFullHomePage">
        <?php require_once "nav.php" ?>

        <div class="container">
            <div class="row">
                <div class="sectionLanecdoteLeRestaurant">
                    <legend class="lanecdoteTitleRestaurant text-center mt-4">L'Anecdote</legend>
                    <h3 class="mb-3 underTitleRestaurant">Restaurant Bistronomique </h3>
                    <div class="d-flex">
                        <img class="restaurantFotos col-3" src="../assets/img/salle.jpg" alt="salle1">
                        <img class="restaurantFotos col-3 ml-1 " src="../assets/img/salle2.jpg" alt="salle2">
                        <img class="restaurantFotos col-3 ml-1" src="../assets/img/salle3.jpg" alt="salle3">
                        <img class="restaurantFotos col-3 ml-1" src="../assets/img/salle4.jpg" alt="salle4">
                    </div>
                    <div>
                        <h3 class="underTitleRestaurant mb-3 mt-3">L'Equipe </h3>
                        <div class="d-flex teamGroup mb-4">
                            <img class="team col-3" src="../assets/img/cuisiniertest.jpg" alt="cuisinier">
                            <img class="team col-3" src="../assets/img/serveur2test.jpg" alt="serveur2">
                            <img class="team col-3" src="../assets/img/serveur3test.jpg" alt="serveur3">
                            <img class="team col-3" src="../assets/img/serveur4test.jpg" alt="sevreur4">
                        </div>
                    </div>
                </div>
            </div>

            <?php require_once "footer.php" ?>
        </div>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
        <script src="assets/js/script.js"></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init()
        </script>
</body>



</html>