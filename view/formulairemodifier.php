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
                    <div class="col-10 align-items-center">

                        <form novalidate class="myForm mx-auto" name="newMeal" method="get" action="nouveauplatformulaire.php">
                            <fieldset>
                                <legend><b>Modifier mon plat</b></legend>
                                <div class="form-group">
                                    <label for="categoryMeal"></label>
                                    <select class="form-control" id="categoryMeal" name="categoryMeal">
                                        <option>Mise en bouche</option>
                                        <option>Entrée</option>
                                        <option>Plat</option>
                                        <option>Fromage</option>
                                        <option>Dessert</option>
                                        <option>Mignardises</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="mealName"></label>
                                    <input class="form-control" type="text" name="mealName" id="mealName" class="w-100" placeholder="nom du plat" value="">
                                </div>

                                <div class="form-group">
                                    <label for="mealComposition"></label>
                                    <input class="form-control" type="text" name="mealComposition" id="mealComposition" class="w-100" placeholder="composition du plat" value="">
                                </div>

                                <div class="d-flex justify-content-between">
                                    <div class="form-group ml-0 pl-0">
                                        <label for="mealPrice"></label>
                                        <div class="d-flex">
                                            <input id="test" class="form-control" type="number" min="1" name="mealPrice" id="mealPrice" class="w-100" placeholder="19.90" value="">
                                            <span class="m-2 ">€</span>
                                        </div>
                                    </div>

                                    <div class="form-group ml-0 pl-0">
                                        <label for="mealSupp"></label>
                                        <div class="d-flex">
                                            <input class="form-control" type="number" min="1" name="mealSupp" id="mealSupp" class="w-100" placeholder="2" value="">
                                            <span class="m-2">€</span>
                                        </div>
                                    </div>
                                </div>


                                <div class="mt-3">
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="0" name="notVisible" value="">
                                        <label class="form-check-label" for="inlineCheckbox2">Ne pas afficher</label>
                                    </div>
                                </div>


                                <button type="submit" class="btn uploadDeleteButtons justify-content-center mb-3 mt-3" name="modifier">modifier</button>
                            </fieldset>
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