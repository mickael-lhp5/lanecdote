<?php
require_once '../controller/controller-nouscontacter.php';
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
    <!-- animation AOS.init img page d'accueil -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <div id="contentFullHomePage">
        <?php require_once "nav.php" ?>

        <div>
            <div class="container-fluid bandeauImg">
                <div class="row justify-content-center h-100">
                    <div class="col-12 h-100 d-flex justify-content-center">
                        <div class="m-3 overflow-scroll-y">
                            <?php if ($showForm) { ?>

                                <form novalidate class="myForm" name="contacter" method="post" action="nouscontacter.php">
                                    <legend class="mb-3 legendForm"><b>Laissez nous un message, nous vous recontacterons</b></legend>
                                    <div class="d-flex">
                                        
                                        <div class="form-group w-50 ">
                                            <label for="firstname"></label>
                                            <input class="form-control" type="text" name="firstname" id="firstname" maxlength="100" placeholder="ex : John" value="<?= isset($_POST['firstname']) ? htmlspecialchars($_POST['firstname'])  : '' ?>" required>
                                            <div class="text-light font-weight-bold">
                                                <span><?= isset($errorMessages['firstname']) ? $errorMessages['firstname'] : '' ?></span>
                                            </div>
                                        </div>
                                        <div class="form-group w-75 ml-3">
                                            <label for="lastname"></label>
                                            <input class="form-control" maxlength="100" type="text" name="lastname" id="lastname" placeholder="ex : Doe" value="<?= isset($_POST['lastname']) ? $_POST['lastname'] : '' ?>" required>
                                            <div class="text-light font-weight-bold">
                                                <span><?= isset($errorMessages['lastname']) ? $errorMessages['lastname'] : '' ?></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email"></label>
                                        <input class="form-control" maxlength="100" type="mail" name="email" id="email" placeholder="Adresse mail" id="email" value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" required>
                                        <div class="text-light font-weight-bold">
                                            <span><?= isset($errorMessages['email']) ? $errorMessages['email'] : '' ?></span>
                                        </div>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="myMessage"></label>
                                        <textarea class="form-control" maxlength="100" name="myMessage" id="myMessage" cols="60" rows="7" placeholder="Message"><?= isset($_POST['codingExperience']) ? $_POST['codingExperience'] : '' ?></textarea>
                                        <div class="text-light font-weight-bold">
                                            <span><?= isset($errorMessages['myMessage']) ? $errorMessages['myMessage'] : '' ?></span>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn updateDeleteButtons justify-content-center mb-3 mt-3" name="submit">envoyer</button>
                                </form>

                            <?php } else { ?>
                                <div class="text-white">
                                    <p>votre nom est : <span class="font-weight-bold"><?= $lastname ?></span></p>
                                    <p>votre prénom est : <span class="font-weight-bold"><?= $firstname ?></span></p>
                                    <p>votre adresse mail est : <span class="font-weight-bold"><?= $mail ?></span></p>
                                    <p>votre message : <span class="font-weight-bold"><?= $myMessage ?></span></p>
                                </div>
                            <?php } ?>
                        </div>

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