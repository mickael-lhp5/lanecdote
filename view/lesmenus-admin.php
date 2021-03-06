<?php
require_once '../controller/controller-lesmenus-admin.php';
?>

<!doctype html>
<html lang="fr">

<head>
    <title>les menus admin</title>
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
                    <div class="col-12 align-items-center justify-content-center">
                        <div>
                            <a href="menuscreation.php"><button type="submit" class="btn mb-3 mt-5 addMenu" name="addMenu">NOUVEAU MENU</button></a>
                            <a href="gestionplatetmenu.php"><button type="submit" class="btn mb-3 mt-5 ml-3 addMenu" name="addMenu">RETOUR</button></a>
                        </div>
                        <table class="table table-hover table-dark">
                            <thead>
                                <tr>
                                    <th scope="col "class="align-middle">Nom</th>
                                    <th scope="col" class="align-middle">Image</th>
                                    <th scope="col" class="align-middle">Visible</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($menuDetails as $menus) { ?>
                                    <tr class="nthPerso">
                                        <td class="align-middle"><?= $menus['menuimage_name'] ?></td>
                                        <td class="align-middle"><?= $menus['menuimage_picture'] ?></td>
                                        <td class="align-middle">
                                            <?= $menus['menuimage_visible'] == 0 ? 'non' : 'oui' ?>
                                        </td>
                                        <td></td>
                                        <td></td>

                                        <td>
                                            <div class="infoButtonEdit">
                                                <form action="menusmodifier.php" method="post">
                                                    <button type="submit" class="btn updateDeleteButtons" name="enterModifyForm" value="<?=$menus['menu_image_id']?>"><i class="far fa-edit"></i></button>
                                                    <div class="infoModifier">modifier</div>
                                                </form>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="infoButtonDelete">
                                                <button type="button" class="btn updateDeleteButtons deleteButtons" id="deleteMenu" name="deleteMenu" data-toggle="modal" data-target="#deleteModal" data-id="<?= $menus['menu_image_id'] ?>"><i class="far fa-trash-alt"></i></button>
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

        <!-- Modal -->

        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModal" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Voulez vous supprimer ce menu ?</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                        <form name="delete" method="post" action="lesmenus-admin.php">
                            <button type="submit" class="btn btn updateDeleteButtons" id="deleteButtonModal" name="deleteMenu" value=""><i class="far fa-trash-alt mr-1"></i>Supprimer</button>
                        </form>
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
    <script src="../assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>



</html>