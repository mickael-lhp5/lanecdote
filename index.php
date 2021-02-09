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
      <nav class="navbar navbar-expand-lg" style="font-size: 16px">
        <a href="../index.php"><img src="../assets/img/logoblanc.png" alt="logoblanc"></a>

        <div class="d-flex align-items-center">
          <a class="d-block d-lg-none mr-3" href="admin.php"><span class="" style="color: white;"><i class="fa fa-user-circle"></i></span></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="text-white"><i class="fa fa-bars"></i></span>
          </button>
        </div>


        <div class="navbarMenu collapse navbar-collapse justify-content-center" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="view/lanecdote.php">QUI SOMMES-NOUS ?</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/menus.php"> MENUS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/horaires_et_informations.php">HORAIRES & INFORMATIONS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/nouscontacter.php">NOUS CONTACTER</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="view/livredor.php">LIVRE D'OR</a>
            </li>
          </ul>
        </div>

        <a class="d-none d-lg-block" href="view/admin.php"><i class="connectionIcon fa fa-user-circle mr-3"></i></a>

      </nav>

      <div id="bgHomePage">
        <div class="container ">
          <div class="row">
            <div class="d-flex col-12 col-sm-4">
              <div class="m-2" data-aos="zoom-in" data-aos-duration="1500">
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