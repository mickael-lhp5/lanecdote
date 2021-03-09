<?php require_once '../controller/controller-formulairemodifierboissons.php'; ?>

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
    <div id="contentFullHomePage" class="adminPage">
        <?php require_once "nav.php" ?>
        <div class="flex-grow-1  imgBgDrinks">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-10 align-items-center">
                        <form novalidate class="modifyDrinkForm mx-auto" name="newDrink" method="post" action="formulairemodifierboissons.php">
                            <p class="h2 text-secondary"><?= $errorMessages['updateDrink'] ?? '' ?></p>
                            <legend class="font-weight-bold text-light text-center">Modifier votre boisson</legend>

                            <div class="d-flex">
                                <div class="form-group w-25">
                                    <label for="categoryDrink"></label>
                                    <select class="form-control" id="categoryDrink" name="categoryDrink">
                                        <option value="null" disabled selected>Type de boisson</option>
                                        <?php
                                        foreach ($typeOfDrinkArray as $key => $typeOfDrink) { ?>
                                            <?php if ($key == $getDrink['typeboisson']) {                                                 
                                                ?>
                                                <option selected value="<?= $key ?>" <?= isset($_POST['categoryDrink']) && $_POST["categoryDrink"] == $key ? "categoryDrink" : '' ?>><?= $typeOfDrink ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $key ?>" <?= isset($_POST['categoryDrink']) && $_POST["categoryDrink"] == $key ? "categoryDrink" : '' ?>><?= $typeOfDrink ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group w-75 ml-3">
                                    <label for="drinkName"></label>
                                    <input class="form-control w-50" type="text" name="drinkName" id="drinkName" placeholder="Nom de la boisson" value="<?= isset($_POST['drinkName']) ? htmlspecialchars($_POST['drinkName'])  : $getDrink['nom'] ?>" required>
                                    <div class="text-danger">
                                        <span><?= isset($errorMessages['drinkName']) ? $errorMessages['drinkName'] : '' ?></span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group ">
                                <label for="drinkPrice"></label>
                                <input class="form-control w-25" type="number" min="1" name="drinkPrice" id="drinkPrice" placeholder="13.90" value="<?= isset($_POST['drinkPrice']) ? htmlspecialchars($_POST['drinkPrice'])  : $getDrink['prix'] ?>" required>
                                <div class="text-danger">
                                    <span><?= isset($errorMessages['drinkPrice']) ? $errorMessages['drinkPrice'] : '' ?></span>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="notVisible" value="0" name="notVisible" <?= $getDrink['visible'] == 0 ? 'checked' : '' ?> required>
                                    <label class="form-check-label text-light" for="notVisible">Ne pas afficher</label>
                                </div>
                            </div>
                            <div class="d-flex">
                                <button type="submit" class="btn updateDeleteButtons justify-content-center mb-3 mt-3" name="modifier">Modifier</button>
                                <a class="btn updateDeleteButtons justify-content-center mb-3 mt-3 ml-3" href="../view/lesboissons-admin.php" name="backMealBtn">Liste des boissons</button></a>
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