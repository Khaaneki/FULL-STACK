<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="stylesheet" href="../css/style.css">
    <title>Contact</title>
</head>

<body>
    <div class="container-fluid parallax">
        <?php require 'header.php'; ?>
        <div class="row"
            style="background-image: url('assets/back/bg.jpg'); min-height:200px">
            <div class="col-12" style="align-self: center">
            </div>
        </div>
        <div class="row align-self-center d-flex justify-content-center bg-light">
            <form action="contact_push.php" class="w-75 m-5" id="form1" name="form1" method="post">
                <div class="row pt-5">
                    <div class="col-6">
                        <label for="nom">Nom</label><br>
                        <input class="form-control" type="text" name="nom" id="nom" placeholder="Nom">
                        <span class="error-message" id="nom-error"></span>
                    </div>
                    <div class="col-6">
                        <label for="prenom">Prénom</label><br>
                        <input class="form-control" type="text" name="prenom" id="prenom" placeholder="Prénom">
                        <span class="error-message" id="prenom-error"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <div class="col-6">
                        <label for="Email">Email</label><br>
                        <input class="form-control" id="mail" type="text" name="mail" placeholder="pierre@afpa.fr">
                        <span class="error-message" id="mail-error"></span>
                    </div>
                    <div class="col-6">
                        <label for="Téléphone">Téléphone</label>
                        <input class="form-control" id="telephone" type="text" name="telephone" placeholder="06.xx.xx.xx.xx">
                        <span class="error-message" id="telephone-error"></span>
                    </div>
                </div>
                <div class="row pt-5">
                    <label for="demande">Votre demande</label>
                </div>
                <div class="row pb-5">
                    <textarea class="form-control" name="commentaire" id="question" rows="4" cols="10"></textarea>
                    <span class="error-message" id="question-error"></span>
                </div>
                <div class="row pb-5">
                    <div class="col-6 d-flex justify-content-center">
                        <button type="reset" class="btn btn-secondary btn-lg d-inline">Annuler</button>
                    </div>
                    <div class="col-6 d-flex justify-content-center">
                        <button type="submit" class="btn btn-secondary btn-lg d-inline">Envoyer</button>
                    </div>
                    
                </div>
            </form>
        </div>
        <?php require 'footer.php'; ?>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
    <script src="../Javascript/Javascript_contact.js" defer></script>
</body>
</html>
