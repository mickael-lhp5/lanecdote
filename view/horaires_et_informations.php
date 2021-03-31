<?php
session_start();

?>

<!doctype html>
<html lang="fr">

<head>
    <title>Horaires et informations</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../assets/css/style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- animation AOS.init img page d'accueil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div id="contentFullHomePage">
        <?php require_once "nav.php"   ?>
        <div class="flex-grow-1" id="">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6">
                        <table class="table table-hover table-dark" style="font-size : 17px">
                            <tbody>
                                <legend class="mt-3"><b>Nos horaires</b></legend>
                                <tr>
                                    <th scope="row">Mardi</th>
                                    <td colspan="2">12:00 ~ 14:00</td>
                                    <td>19:00 ~ 21:30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Mercredi</th>
                                    <td colspan="2">12:00 ~ 14:00</td>
                                    <td>19:00 ~ 21:30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Jeudi</th>
                                    <td colspan="2">12:00 ~ 14:00</td>
                                    <td>19:00 ~ 21:30</td>
                                </tr>
                                <tr>
                                    <th scope="row">Vendredi</th>
                                    <td colspan="2">12:00 ~ 14:00</td>
                                    <td>19:00 ~ 22:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Samedi</th>
                                    <td colspan="2">12:00 ~ 14:30</td>
                                    <td>19:00 ~ 22:00</td>
                                </tr>
                                <tr>
                                    <th scope="row">Dimanche</th>
                                    <td colspan="2">12:00 ~ 15:00</td>
                                    <td>Fermé</td>
                                </tr>
                                <tr>
                                    <th scope="row">Lundi</th>
                                    <td colspan="2">Fermé</td>
                                    <td>Fermé</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-12 col-md-6">
                        <legend class="mt-3"><b>Nous trouver</b></legend>
                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10366.95776202135!2d0.1118675!3d49.4894287!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdc660c78593ded3e!2sL&#39;Anecdote!5e0!3m2!1sen!2sfr!4v1610981751686!5m2!1sen!2sfr" width="400" max-width="100%" height="350" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    </div>
                    <div class="col-12">
                        <legend class="mt-2 mb-2"><b>Informations</b></legend>
                        <p>La vente à emporter est désormais disponible uniquement le jeudi, vendredi et samedi.
                                Vos commandes sont à passer avant midi au minimum la veille, et sont à retirer entre 17h30 et 19h.
                                Vous pouvez commander par téléphone au 09.83.87.57.14 ou par messenger.</p>
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