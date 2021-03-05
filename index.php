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
  <link rel="stylesheet" href="/assets/css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,900;1,900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:700i|Fira+Sans" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
  <!-- animation AOS.init img page d'accueil -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

  <div id="contentFullHomePage">
    <nav class="navbar navbar-expand-lg" style="font-size: 16px">
      <a href="../view/lanecdote.php"><img class="logo" src="../assets/img/logoresto.png" alt="logoblanc"></a>

      <div class="d-flex align-items-center">
        <a class="d-block d-lg-none mr-3" href="admin.php"><span class="" style="color: white;"><i class="fa fa-user-circle"></i></span></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="text-white"><i class="fa fa-bars"></i></span>
        </button>
      </div>

      <div class="navbarMenu collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="view/lanecdote.php">LE RESTAURANT</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"> CARTE & MENUS</a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="view/lacarte.php">La carte</a>
              <a class="dropdown-item" href="view/lesmenus.php">Les menus</a>
              <a class="dropdown-item" href="view/lesboissons.php">Les boissons</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/horaires_et_informations.php">HORAIRES & INFORMATIONS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="view/nouscontacter.php">NOUS CONTACTER</a>
          </li>
        </ul>
      </div>
      <a class="d-none d-lg-block" href="view/admin.php"><i class="connectionIcon fa fa-user-circle mr-3"></i></a>
    </nav>

    <div id="bgHomePage">
      <div class="container ">
        <div class="row">



          <header class="bandeauImg"></header>
          <section class="col-12 sectionLanecdote">
            <legend class="lanecdoteTitle mt-4"><b>L'Anecdote</legend>
            <h3 class="">Restaurant Bistronomique </h3>
            <p class="lanecdoteprez mb-5 ml-5 mr-5">L’Anecdote, plus qu’un restaurant, c’est le projet d’une vie, Jérôme et Greg en décembre 2019 se lance dans une folle aventure reprendre le Bistrot d’Antan, une adresse très réputée sur le Havre.
              Malgré de nombreuses péripéties, le projet à vue le jour le 12 aout 2020, nous sommes fière de vous accueillir dans un établissement complétement rénové, décoré dans un style industriel sobre et épuré. Vous pouvez profiter d’une partie Lounge bar, avec des fauteuils et canapés pour prendre un verre autour d’une planche apéro ou bien déguster autour d’une table nos mets, tous fait maison bien sûr.
              Notre philosophie, le partage, nous tenons à partager avec chacun de nos clients notre savoir-faire et notre passion pour notre métier, notre but est que vous passiez un agréable moment dans notre établissement. Toute notre équipe partage les mêmes ambition et la même détermination.</p>

            <section class="col-12 mt-4 mb-4 sectionLanecdote">
              <div class="d-flex flex-wrap justify-content-center imgTextChef">
                <img class="chefFoto" src="../assets/img/cuisiniertest2.jpg" srcset="../assets/img/cuisiniertest2.jpg">
                <div class="textChef">
                  <h2 class="mt-5">LE CHEF</h2>
                  <h3 class="mb-3"><span style="color: black;">Greg Chenel</span> </h3>
                  <p class="mt-3">"Je travaille main dans la main avec mes producteurs et apprécie le partage et la créativité qui émergent de ces belles relations".<br>
                    Lorsque le produit est bon, c’est parce que son producteur a une exigence, une précision, nous nous devons en tant que chef de cuisine respecter et sublimer ces magnifiques produits.</p>
                  <img class="reverseComma mt-5" src="../assets/img/reversecommagold.png" alt="pointVirgule">
                  <p class="suspensionPoint">...</p>
                </div>
              </div>
            </section>

            <!-- <section class="col-12 mt-4 sectionLanecdote">
                <div id="bgHomePage">
                    <div class="container d-flex justify-content-center" id="presentationLanecdote">
                        <div class="row" id="descriptif">
                            <section class="d-flex col-12 mt-4 mb-5 flex-wrap" id="restaurantPrez">
                                <div class="d-flex col-12 col-sm-3">
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
                            </section> -->



            <!-- <section class="d-flex col-12 mt-2 flex-wrap justify-content-center mb-2" id="teamPrez">
                                <legend class="mt-3" style="text-align: center;font-size:30px;color:white;"><b>L'équipe</b></legend>

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
                            </section> -->
        </div>
      </div>
    </div>

    <!-- <div class="d-flex justify-content-center col-12 col-sm-4">

            <div id="carouselExampleControls" class="carousel slide " data-ride="carousel">
              <div class="carousel-inner  myCarousel">
                <div class="carousel-item active">
                  <img class="d-block w-100" src="assets/img/carouseltest1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/carouseltest1.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block w-100" src="assets/img/carouseltest1.jpg" alt="Third slide">
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
            </div> -->


    <!-- <div class="m-2" data-aos="zoom-in" data-aos-duration="1500">
                <img class="w-100 homeImg" src="assets/img/carousel1.jpg">
              </div>
            </div>
            <div class="d-flex col-12 col-sm-4">
              <div class="m-2" data-aos="zoom-in" data-aos-duration="1500">
                <img class="w-100  homeImg" src="assets/img/carousel2.jpg">
              </div>
            </div>
            <div class="d-flex col-12 col-sm-4">
              <div class="m-2" data-aos="zoom-in" data-aos-duration="1500">
                <img class="w-100 homeImg" src="assets/img/IMG_20200723_215527.jpg">
              </div>
            </div> -->
  </div>
  </div>
  </div>
  </div>

  <?php require_once "view/footer.php" ?>

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