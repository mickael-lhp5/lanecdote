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
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- animation AOS.init img page d'accueil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div id="contentFullHomePage">
        <?php require_once "nav.php" ?>
        <div id="bgHomePage">
            <div class="container d-flex justify-content-center" id="presentationLanecdote">
                <div class="row" id="descriptif" style="width:100%;">
                    <section class="col-12 mt-4">
                        <legend class="mt-3" style="text-align: center;font-size:30px;"><b>L'Anecdote</b></legend>
                        <h3 style="font-size:20px;text-align: center;" class="mt-2">restaurant bistronomique </h3>
                        <p style="font-size:15px;color: black;">L’Anecdote, plus qu’un restaurant, c’est le projet d’une vie, Jérôme et Greg en décembre 2019 se lance dans une folle aventure reprendre le Bistrot d’Antan, une adresse très réputé sur le Havre.
                            Malgré de nombreuses péripéties, le projet à vue le jour le 12 aout 2020, nous sommes fière de vous accueillir dans un établissement complétement rénové, décoré dans un style industriel sobre et épuré. Vous pouvez profiter d’une partie Lounge bar, avec des fauteuils et canapés pour prendre un verre autour d’une planche apéro ou bien déguster autour d’une table nos mets, tous fait maison bien sûr.
                            Notre philosophie, le partage, nous tenons à partager avec chacun de nos clients notre savoir-faire et notre passion pour notre métier, notre but est que vous passiez un agréable moment dans notre établissement. Toute notre équipe partage les mêmes ambition et la même détermination.</p>

                    </section>
                    <section class="d-flex col-12 mt-4 mb-5 flex-wrap" id="restaurantPrez">
                        <div class="col-12 col-sm-3">
                            <div class="m-2">
                                <img class="w-100 homeImg" data-aos="fade-up" data-aos-duration="3000" src="../assets/img/devanture1.jpg">
                            </div>
                        </div>

                        <div class="d-flex col-12 col-sm-3">
                            <div class="m-2">
                                <img class="w-100 homeImg" data-aos="fade-up" data-aos-duration="3000" src="../assets/img/salle3.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-3">
                            <div class="m-2">
                                <img class="w-100 homeImg" data-aos="fade-up" data-aos-duration="3000" src="../assets/img/salle4.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-3">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="fade-up" data-aos-duration="3000" src="../assets/img/devanture2.jpg">
                            </div>
                        </div>
                    </section>




                    <section class="d-flex col-12 mt-4 flex-wrap justify-content-center mb-2" id="teamPrez">
                        <legend class="mt-3" style="text-align: center;font-size:30px;color:black;"><b>L'équipe</b></legend>

                        <div class="d-flex col-12 col-sm-4  mb-3" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="1000">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../assets/img/cuisiniertest.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-4">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../assets/img/serveur2test.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-4">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../assets/img/serveur4test.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-4">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../assets/img/serveur3test.jpg">
                            </div>
                        </div>
                        <div class="d-flex col-12 col-sm-4">
                            <div class="m-2">
                                <img class="w-100  homeImg" data-aos="flip-left" data-aos-easing="ease-out-cubic" data-aos-duration="2000" src="../assets/img/serveur3test.jpg">
                            </div>
                        </div>
                    </section>
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