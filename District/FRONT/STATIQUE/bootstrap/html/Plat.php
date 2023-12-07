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
    <title>Plat</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid parallax">
    <?php require 'header.php';
    include('DAO.php');?>
        <!--Separateur Start-->
        <div class="row">
            <div class="col-12 d-md-flex bg-dark justify-content-center " style="align-self: center;">
                <p class="h3 text-center text-light my-1">Nos Plats</p>
            </div>
        </div><!--Separateur End-->
        <!--Plats Start-->
<?php
$stmt = $conn->query("SELECT a.libelle, p.libelle as titre, p.description, p.image, p.id from categorie a join plat p where p.id_categorie = a.id and a.active = 'Yes' Order by a.libelle");
$cardCount = 0;

while ($row = $stmt->fetch()) {
    if ($cardCount % 4 == 0) {

        echo '<div class="row px-5 my-4">';
    }

    echo '
        <div class="col-12 col-lg-6 px-6 pb-4">
            <div class="card bg-dark">
                <div class="card-body d-flex flex-column align-items-center">
                <h4 class="card-title text-light mb-3">' . $row['titre'] . '</h4>
                <img src="assets/all/' . $row['image'] . '" class="card-img-top" alt="' . $row['image'] . '" style="max-width: 25%;">
                    <p class="h3 text-light my-3 text-center"></p>
                    <p class="card-text text-light h4 d-none d-lg-flex py-3">' . $row['description'] . '</p>
                    <p class="card-text text-light h6 d-lg-none d-lg-flex py-3">' . $row['description'] . '</p>
                    <div class="row-outline mt-auto d-flex justify-content-end">
                        <a href="commande.php" class="btn btn-secondary" style="max-width: 8rem;">Commander</a>
                    </div>
                </div>
            </div>
        </div>';

    $cardCount++;

    if ($cardCount % 4 == 0) {
        echo '</div>';
    }
}
if ($cardCount % 4 != 0) {
    echo '</div>';
}

?>
        <?php require 'footer.php'; ?>
    </div><!--Container End-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"defer></script>
        <script src="/FRONT/DYNAMIQUE/javascript/javascript2.js"defer></script>
</body>