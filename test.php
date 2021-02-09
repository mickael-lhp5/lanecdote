<!doctype html>
<html lang="fr">

<head>
    <title>L'ANECDOTE</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- animation AOS.init img page d'accueil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>


    <div id="contentFullHomePage">
        <?php require_once "view/nav.php" ?>

        <div id="bgHomePage">
            <div class="container ">
                <section class="row">
                    <div id="carouselExampleControls" class="carousel slide myCarousel w-100" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 carouselImg" src="assets/img/burgertest.jpg" alt="First slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carouselImg" src="assets/img/maintest" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100 carouselImg" src="assets/img/desserttest.jpg" alt="Third slide">
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                </section>
            </div>
        </div>
    </div>

    <!-- L'anecdote -->
    <div id="bgHomePage">
        <div class="container d-flex justify-content-center" id="presentationLanecdote">
            <div class="row" id="descriptif" style="width:100%;">
                <section class="col-12 mt-4">
                    <h1 style="font-size:30px;">L'Anecdote</h1>
                    <h3 style="font-size:20px;">restaurant bistronomique </h3>
                    <p style="font-size:15px;">L’Anecdote, plus qu’un restaurant, c’est le projet d’une vie, Jérôme et Greg en décembre 2019 se lance dans une folle aventure reprendre le Bistrot d’Antan, une adresse très réputé sur le Havre.
                        Malgré de nombreuses péripéties, le projet à vue le jour le 12 aout 2020, nous sommes fière de vous accueillir dans un établissement complétement rénové, décoré dans un style industriel sobre et épuré. Vous pouvez profiter d’une partie Lounge bar, avec des fauteuils et canapés pour prendre un verre autour d’une planche apéro ou bien déguster autour d’une table nos mets, tous fait maison bien sûr.
                        Notre philosophie, le partage, nous tenons à partager avec chacun de nos clients notre savoir-faire et notre passion pour notre métier, notre but est que vous passiez un agréable moment dans notre établissement. Toute notre équipe partage les mêmes ambition et la même détermination.
                    </p>

                </section>
                <section class="d-flex col-12 mt-4 mb-5 flex-wrap" id="restaurantPrez">
                    <div class="col-12 col-sm-3">
                        <div class="m-2">
                            <img class="w-100 homeImg" src="../assets/img/devanture1.jpg">
                        </div>
                    </div>

                    <div class="d-flex col-12 col-sm-3">
                        <div class="m-2">
                            <img class="w-100 homeImg" src="../assets/img/salle3.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-3">
                        <div class="m-2">
                            <img class="w-100 homeImg" src="../assets/img/salle4.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-3">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/devanture2.jpg">
                        </div>
                    </div>
                </section>

                <div class="d-flex justify-content-center">
                    <h1 style="font-size:30px;">L'équipe</h1>
                </div>
                <section class="d-flex col-12 mt-4 flex-wrap justify-content-center mb-2" id="teamPrez">
                    <div class="d-flex col-12 col-sm-4  mb-3">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/cuisiniertest.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-4">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/serveur2test.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-4">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/serveur4test.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-4">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/serveur3test.jpg">
                        </div>
                    </div>
                    <div class="d-flex col-12 col-sm-4">
                        <div class="m-2">
                            <img class="w-100  homeImg" src="../assets/img/serveur3test.jpg">
                        </div>
                    </div>
                </section>
            </div>
        </div>
    


    </div>
    <!-- menus -->

    <div class="flex-grow-1">
        blabla
    </div>

    <!-- horaires et informations -->
    <div class="flex-grow-1" id="bgHomePage">


        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1>Nos horaires</h1>
                    <p>Mardi 12:00 – 14:00 - 19:00 – 21:30</p>
                    <p>Mercredi 12:00 – 14:00 - 19:00 – 21:30</p>
                    <p>Jeudi 12:00 – 14: 00 - 19:00 – 21:30</p>
                    <p>Vendredi 12:00 – 14 :00 - 19:00 – 22 :00</p>
                    <p>Samedi 12:00 – 14:30 – 19:00 – 22:00</p>
                    <p>Dimanche 12:00 – 15:00</p>
                    <p>Lundi : Close </p>
                </div>
                <div class="col-12 col-md-6">
                    <h1>Nous trouvez</h1>
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10366.95776202135!2d0.1118675!3d49.4894287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc660c78593ded3e!2sL&#39;Anecdote!5e0!3m2!1sen!2sfr!4v1610981751686!5m2!1sen!2sfr" width="400" max-width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

                </div>


                <div class="col-12">
                    <h1>Informations</h1>
                    <p>Notre vente à emporter est désormais disponible uniquement le jeudi, vendredi et samedi..
                        Vos commandes sont à passer avant midi au minimum la veille, et sont à retirer entre 17h30 et 19h.
                        Vous pouvez commander par téléphone au 09.83.87.57.14 ou par messenger.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "view/footer.php" ?>

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