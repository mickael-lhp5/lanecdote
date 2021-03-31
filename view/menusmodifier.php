<?php require_once '../controller/controller-modifiermenus.php'; ?>


<!doctype html>
<html lang="fr">

<head>
    <title>Menus modifier</title>
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
        <div class="flex-grow-1">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-10 align-items-center menuModifyForm">
                        <form novalidate class="mx-auto" name="newMenu" method="post" action="menusmodifier.php">
                            <p class="mt-2"><span style="color: #D4514A; font-style:italic"><?= $errorMessages['updateMenu'] ?? '' ?></span></p>
                            <legend class="font-weight-bold text-light text-center mt-2">Modifier menu</legend>

                            <div class="">
                                <div class="form-group w-75 mb-3">
                                    <label for="menuName"></label>
                                    <input class="form-control" type="text" name="menuName" id="menuName" placeholder="Nom du menu" value="<?= $_SESSION['$menuDetails']['menuimage_name'] ?>" required>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['menuName']) ? $errorMessages['menuName'] : '' ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">

                                <label for="menuImage"></label>
                                <div class="imgModifyAdminPosition">
                                    <img class="imgModifyAdmin" src="../assets/img/imagemenu/<?= $_SESSION['$menuDetails']['menuimage_picture'] ?>" alt="">
                                    <input class="w-25 text-light mt-3" type="file" enctype="multipart/form-data" name="menuImage" id="menuImage" placeholder="image de mon menu" value="<?= $_SESSION['$menuDetails']['menuimage_picture'] ?>" required>
                                </div>

                                <div class="text-danger">
                                    <span><?= isset($errorMessages['menuImage']) ? $errorMessages['menuImage'] : '' ?></span>
                                </div>
                            </div>

                            <div class="mt-3 mb-2">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="notVisible" value="0" name="notVisible" <?= $_SESSION['$menuDetails']['menuimage_visible'] == 0 ? 'checked' : '' ?> required>
                                    <label class="form-check-label text-light" for="notVisible">Ne pas afficher</label>
                                </div>
                            </div>
                            <div class="d-flex mb-3">
                                <button type="submit" class="btn updateDeleteButtons justify-content-center mb-3 mt-3" name="modifier" value="<?= $_SESSION['$menuDetails']['menu_image_id'] ?>">Modifier</button>
                                <a class="btn updateDeleteButtons justify-content-center mb-3 mt-3 ml-3" href="../view/lesmenus-admin.php" name="backMenuBtn">Les menus</button></a>
                            </div>
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
    <script src="assets/js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init()
    </script>
</body>

</html>