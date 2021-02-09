<!doctype html>
<html lang="fr">

<head>
    <title>L'ANECDOTEtest</title>
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

    <div id="contentFullHomePage" class="adminPage">
        <?php require_once "nav.php" ?>
        <div class="flex-grow-1" id="bgHomePage">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-10 align-items-center justify-content-center">
                        <div>
                            <a href="nouveauplatformulaire.php"><button type="submit" class="btn mb-3 addNewMeal " name="addMeal">NOUVEAU PLAT</button></a>
                        </div>
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col-9">Descritpion</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">Le Saumon Exotique</th>
                                    <td>Tartare de saumon, avocat et mangue, vinaigrette exotique</td>
                                    <td><button type="button" class="btn uploadDeleteButtons" name="modif1">modifier</button></td>
                                    <td><button type="submit" class="btn uploadDeleteButtons" name="supp1" data-toggle="modal" data-target="#supp1">supprimer</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">L'Oeuf Cocotte</th>
                                    <td>Oeuf en cocotte au chorizo, gratiné au comté</td>
                                    <td><button type="submit" class="btn uploadDeleteButtons" name="modif2" data-toggle="modal" data-target="#exampleModalLong">modifier</button></td>
                                    <td><button type="submit" class="btn uploadDeleteButtons" name="supp2">supprimer</button></td>
                                </tr>
                                <tr>
                                    <th scope="row">Le Foie Gras</th>
                                    <td>Tranche de foie gras, chutney de figue et crumble noisette</td>
                                    <td><button type="submit" class="btn uploadDeleteButtons" name="modif3">modifier</button></td>
                                    <td><button type="submit" class="btn uploadDeleteButtons" name="supp3">supprimer</button></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>



        <div class="modal fade" id="supp1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Voulez-vous supprimer ce plat ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div class="modal-body">
                        Voulez-vous supprimer ce plat ?
                    </div> -->
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Non</button>
                        <button type="button" class="btn btn-danger">Valider la suppression</button>
                    </div>
                </div>
            </div>
        </div>
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