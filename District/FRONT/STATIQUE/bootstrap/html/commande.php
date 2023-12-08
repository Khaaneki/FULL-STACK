<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Commande</title>
</head>

<body>
    <!--Container Start-->
    <div class="container-fluid parallax">
        <?php require 'header.php'; ?>
        <!--Background Start-->
        <div class="row"
            style="background-image: url('assets/back/bg.jpg'); min-height:200px">
            <div class="col-12" style="align-self: center">
            </div>
        </div><!--Background End-->
        <!--Separateur Start-->
        <div class="row">
            <div class="col-12 d-md-flex bg-dark justify-content-center " style="align-self: center;">
                <p class="h3 text-center text-light my-1">Commande</p>
            </div>
        </div><!--Separateur End-->
        <!--Forms Start-->
        <?php
        include('DAO.php');

        if (isset($_GET['id'])) {
            $plat_id = $_GET['id'];

            $stmt = $conn->prepare("SELECT a.libelle, p.prix, p.libelle as titre, p.description, p.image, p.id FROM categorie a JOIN plat p ON p.id_categorie = a.id AND p.id = :plat_id");
            $stmt->bindParam(':plat_id', $plat_id);
            $stmt->execute();

            if ($row = $stmt->fetch()) {
                echo '
                <div class="col-12 py-4 d-flex justify-content-center">
                    <div class="card bg-dark rounded">
                        <div class="card-body">
                            <h4 class="card-title text-light mb-3">' . $row['titre'] . '</h4>
                            <img src="assets/all/' . $row['image'] . '" class="card-img-top" alt="' . $row['image'] . '" style="max-width: 50%;">
                            <p class="h3 text-light my-3 text-center"></p>
                            <p class="card-text text-light h4 py-3">' . $row['prix'] . '€</p>
                            <p class="card-text text-light h4 d-none d-lg-flex py-3">' . $row['description'] . '</p>
                            <div class="row-outline mt-auto d-flex justify-content-end">
                                <div class="form-outline" style="width: 6rem;">
                                    <input min="1" max="10" type="number" id="typeNumber" class="form-control" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>';
            }
        }
            echo '
            <div class="row d-flex justify-content-center" style="background-color: lightblue;">
                <form action="commande_process.php" id="form1" method="post">
                    <div class="row pt-4">
                        <div class="col-12">
                            <label for="nom">
                                <p class="h5">Nom Prénom</p>
                            </label>
                            <input class="form-control" type="text" name="nom_prenom" id="nom_prenom" placeholder="Nom Prénom">
                            <span class="error-message" id="nom_prenom-error"></span>
                        </div>
                    </div>
                <div class="row pt-4">
                    <div class="col-6">
                        <label for="mail">
                            <p class="h5">Email </p>
                        </label>
                        <input class="form-control" id="mail" type="text" name="mail" placeholder="pierre@afpa.fr">
                        <span class="error-message" id="mail-error"></span>
                    </div>
                    <div class="col-6">
                        <label for="telephone">
                            <p class="h5">Téléphone</p>
                        </label>
                        <input class="form-control" id="tel" type="text" name="tel" placeholder="06.xx.xx.xx.xx">
                        <span class="error-message" id="tel-error"></span>
                    </div>
                </div>
                <div class="row d-flex pt-5">
                    <div class="col-12">
                        <legend><strong>Votre adresse</strong></legend>
                        <textarea class="form-control" name="adresse" id="adresse" rows="4" cols="10"></textarea>
                        <span class="error-message" id="adresse-error"></span>
                    </div>
                </div>
                <div class="col-12 pt-4 py-4">
                    <button type="submit" id="button1" class="btn-secondary">Envoyer</button>
                </div>
            </form><!-- Forms End -->
        </div>';
        ?>
            <?php require 'footer.php'; ?>
        </div><!--Container End-->
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
            integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
            integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
            crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
        <script src="../../../DYNAMIQUE/javascript/javascript.js"defer></script> 
</body>

</html>
