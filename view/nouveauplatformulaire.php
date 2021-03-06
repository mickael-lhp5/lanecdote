<?php require_once '../controller/controller-nouveauplatformulaire.php'; ?>

<!doctype html>
<html lang="fr">

<head>
    <title>Nouveau Plat Formulaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>

<body>

    <div id="contentFullHomePage">
        <?php require_once "nav.php" ?>
        
        <div class="flex-grow-1">
            <div class="container h-100">
                <div class="row justify-content-center">
                    <div class="col-10 align-items-center newMealForm">
                        <form novalidate class="mx-auto" name="newMeal" method="post" action="nouveauplatformulaire.php">
                            <p class="mt-2"><span style="color: #D4514A; font-style:italic"><?= $errorMessages['addMeal'] ?? '' ?></span></p>
                            <legend class="text-white text-center font-weight-bold"><b>Nouveau Plat</b></legend>
                            <div class="form-group">
                                <label for="categoryMeal"></label>
                                <select class="form-control" id="categoryMeal" name="categoryMeal">
                                    <option value="null" disabled selected>Type de plat</option>
                                    <?php
                                    foreach ($typeOfMealArray as $key => $typeOfMeal) { ?>
                                        <option value="<?= $key ?>" <?= isset($_POST['categoryMeal']) && $_POST["categoryMeal"] == $key ? "categoryMeal" : '' ?>><?= $typeOfMeal ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mealName"></label>
                                <input class="form-control w-100" type="text" name="mealName" id="mealName" placeholder="Nom du plat" required>
                                <div class="text-danger">
                                    <span><?= isset($errorMessages['mealName']) ? $errorMessages['mealName'] : '' ?></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="mealComposition"></label>
                                <input class="form-control w-100" type="text" name="mealComposition" id="mealComposition" placeholder="Composition du plat " required>
                                <div class="text-danger">
                                    <span><?= isset($errorMessages['mealComposition']) ? $errorMessages['mealComposition'] : '' ?></span>
                                </div>
                            </div>

                            <div class="d-flex justify-content-between">
                                <div class="form-group ml-0 pl-0">
                                    <label for="mealPrice"></label>
                                    <div class="d-flex">
                                        <input class="form-control w-100" type="number" min="1" name="mealPrice" id="mealPrice" placeholder="19.90" required>
                                        <span class="m-2 text-light">€</span>
                                    </div>
                                    <div class="text-danger">
                                            <span><?= isset($errorMessages['mealPrice']) ? $errorMessages['mealPrice'] : '' ?></span>
                                        </div>                                
                                </div>

                                <div class="form-group ml-0 pl-0">
                                    <label for="mealSupp"></label>
                                    <div class="d-flex">
                                        <input class="form-control w-100" type="number" min="1" name="mealSupp" id="mealSupp" placeholder="2" required>
                                        <span class="m-2 text-light">€</span>
                                    </div>
                                </div>
                            </div>

                            <div class="mt-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="notVisible" value="0" name="notVisible" value="<? isset($_POST['notVisible']) ? htmlspecialchars($_POST['notVisible']) : '' ?>" required>
                                    <label class="form-check-label text-white" for="notVisible">Ne pas afficher</label>
                                </div>
                            </div>

                            <div class="d-flex">
                                <button type="submit" class="btn updateDeleteButtons justify-content-center mb-3 mt-3" name="valider">Ajouter plat</button>
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