<?php require_once '../controller/controller-modifierformulaire.php'; ?>

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
        <div class="flex-grow-1 imgBgLacarteModifForm" >
            <div class="container-fluid h-100">
                <div class="row justify-content-center">
                    <div class="col-10 align-items-center">
                        <form novalidate class="myForm mx-auto" name="modification" method="POST" action="formulairemodifier.php">
                            <p class="h2 text-secondary"><?= $errorMessages['updateMeal'] ?? '' ?></p>
                            <legend class="font-weight-bold">Modifiez votre plat</legend>
                            <div class="form-group d-flex ">
                                <div class="form-group w-25">
                                    <label for="categoryMeal"></label>
                                    <select class="form-control" id="categoryMeal" name="categoryMeal">
                                        <option value="null" disabled selected>Type de plat</option>
                                        <?php
                                        foreach ($typeOfMealArray as $key => $typeOfMeal) { ?>
                                            <?php if ($key == $getMeal['typeplat']) { ?>
                                                <option selected value="<?= $key ?>" <?= isset($_POST['categoryMeal']) && $_POST["categoryMeal"] == $key ? "categoryMeal" : '' ?>><?= $typeOfMeal ?></option>
                                            <?php } else { ?>
                                                <option value="<?= $key ?>" <?= isset($_POST['categoryMeal']) && $_POST["categoryMeal"] == $key ? "categoryMeal" : '' ?>><?= $typeOfMeal ?></option>
                                            <?php } ?>
                                        <?php } ?>
                                    </select>
                                </div>

                                <div class="form-group w-75 ml-3">
                                    <label for="mealName"></label>
                                    <input class="form-control " type="text" name="mealName" id="mealName" placeholder="Nom du plat" value="<?= isset($_POST['mealName']) ? htmlspecialchars($_POST['mealName'])  : $getMeal['nom'] ?>" required>
                                </div>
                            </div>

                            <div class="form-group w-100">
                                <label for="mealComposition"></label>
                                <input class="form-control" type="text" name="mealComposition" id="mealComposition" placeholder="Composition du plat " value="<?= isset($_POST['mealComposition']) ? htmlspecialchars($_POST['mealComposition'])  : $getMeal['description'] ?>" required>
                            </div>

                            <div class="d-flex">
                                <div class="form-group ml-0 pl-0">
                                    <label for="mealPrice"></label>
                                    <div class="d-flex">
                                        <input class="form-control" type="number" min="1" name="mealPrice" id="mealPrice" placeholder="19.90" value="<?= isset($_POST['mealPrice']) ? htmlspecialchars($_POST['mealPrice'])  : $getMeal['prix'] ?>" required>
                                        <span class="m-2 ">€</span>
                                    </div>
                                </div>

                                <div class="form-group ml-0 pl-0">
                                    <label for="mealSupp"></label>
                                    <div class="d-flex">
                                        <input class="form-control w-100" type="number" min="0" name="mealSupp" id="mealSupp" placeholder="0" value="<?= isset($_POST['mealSupp']) ? htmlspecialchars($_POST['mealSupp'])  : $getMeal['supplément'] ?>" required>
                                        <span class="m-2">€</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label mr-2 font-weight-bold" for="notVisible">Ne pas afficher</label>
                                    <input class="form-check-input" type="checkbox" id="notVisible" value="0" name="notVisible"  <?= $getMeal['visible'] == 0 ? 'checked' : '' ?> required>

                                </div>
                            </div>

                            <div class="d-flex">
                                <button type="submit" class="btn updateDeleteButtons justify-content-center mb-3 mt-3" name="modifier" value="<?= $getMeal['id'] ?>">Modifier plat</button>
                                <a class="btn updateDeleteButtons justify-content-center mb-3 mt-3 ml-3" href="../view/lacarte-admin.php" name="backMealBtn">Liste des plats</button></a>
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