<?php
require_once '../controller/controller-lesboissons-admin.php';
?>


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
    <script src="https://kit.fontawesome.com/3437dc2c72.js" crossorigin="anonymous"></script>
    <!-- animation AOS.init img page d'accueil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <div id="contentFullHomePage">
        <?php require_once "nav.php" ?>
        <div class="flex-grow-1" id="bgHomePage">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-6 align-items-center justify-content-center">
                        <div>
                            <a href="formulaireboissons.php"> <button type="submit" class="btn mb-3 mt-5 addNewDrink" name="addDrink">NOUVELLE BOISSON</button></a>
                            <a href="gestionplatetmenu.php"><button type="submit" class="btn mb-3 mt-5 ml-3 addNewDrink" name="addDrink">RETOUR</button></a>
                        </div>
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col">Nom</th>
                                    <th scope="col-9">Prix</th>
                                    <th scope="col">Visible</th>
                                    <th scope="col">Type</th>

                                </tr>
                            </thead>
                            <tbody>


                                <?php foreach ($drinkDetails as $drinks) { ?>
                                    <tr class="nthPerso">
                                        <td><?= $drinks['nom'] ?></td>
                                        <td><?= $drinks['prix'] ?><span>€</span></td>
                                        <td>
                                            <?= $drinks['visible'] == 0 ? 'non' : 'oui' ?>
                                        </td>
                                        <td><?= $drinks['Type de boisson'] ?></td>
                                        <td>
                                            <div class="infoButtonEdit">
                                                <form action="formulairemodifierBoissons.php" method="POST">
                                                    <button type="submit" class="btn updateDeleteButtons ml-1" name="enterModifyDrinkForm" value="<?= $drinks['id'] ?>"><i class="far fa-edit"></i></button>
                                                    <div class="infoModifier">modifier</div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="infoButtonDelete">
                                                <button type="button" class="btn updateDeleteButtons deleteButtons" id="deleteDrink" name="deleteDrink" data-toggle="modal" data-target="#deleteModal" data-id="<?= $drinks['id'] ?>"><i class=" far fa-trash-alt"></i></button>
                                                <div class="infoDelete">supprimer</div>
                                            </div>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ------------------------------------- -->
    <!-- ICI NOTRE MODAL DE SUPPRESSION DE RDV -->
    <!-- ------------------------------------- -->

    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimer cette boisson ?</h5>
                </div>
                <!-- <div id="modalBody" class="modal-body">
                           <div><span class="fw-bold">Patient : </span><span id="patientDeleteModal"></span></div>
                           <div><span class="fw-bold">Date : </span><span id="dateDeleteModal"></span></div>
                           <div><span class="fw-bold">Heure : </span><span id="hourDeleteModal"></span></div>
                        </div> -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>

                    <form name="delete" method="POST" action="lesboissons-admin.php">
                        <button type="submit" class="btn btn updateDeleteButtons" id="deleteButtonModal" name="deleteDrink" value="<?= $drinks['id'] ?>">Supprimer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- ------------------------------------- -->
    <!-- ICI NOTRE MODAL DE SUPPRESSION DE RDV -->
    <!-- ------------------------------------- -->






    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
    <script src="../assets/js/script.js"></script>
</body>



</html>