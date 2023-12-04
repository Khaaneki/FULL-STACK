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
    <link rel="stylesheet" href="/FRONT/STATIQUE/bootstrap/css/style.css">
    <title>Accueil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <!--Container Start-->
    <div class="container-fluid parallax">
    <?php require 'header.php'; ?>
        <!--Background & Research Start-->
        <div class="row" style="background-image: url('/FRONT/STATIQUE/bootstrap/html/assets/back/bg.jpg'); min-height:200px">
            <div class="col-12" style="align-self: center">
                <form class="form-inline justify-content-center my-3">
                    <input class="form-control" style="min-width: 400px;" type="search" placeholder="Rechercher">
                    <button class="btn text-light btn-outline-success bg-success" type="submit">Rechercher</button>
                    <div class="d-flex justify-content-end py-3"><video style="width: 70%;" muted autoplay width="460" height="260" loop>
                        <source src="/FRONT/STATIQUE/bootstrap/html/assets/back/video.mp4">
                    </video>
                    </div>
                </form>
            </div>
        </div><!--Background & Research End-->
        <!-- Debut separateur -->
        <div class="row">
            <div class="col-12 d-none d-md-flex bg-dark justify-content-center" style="align-self: center;">
                <p class="h3 text-center text-light my-1">Nos catégories</p>
            </div>
        </div><!-- Fin separateur -->
        <?php
include('DAO.php');
$card = 1;
$stmt = $conn->query("select a.libelle,a.image,sum(quantite) from commande c join plat on p.id = c.id_plat join categorie a on p.id_categorie = a.id group by a.id order by sum(quantite) desc;");
while ($row = $stmt->fetch()) {
    if ($card == 1) {
        echo '<div class="row justify-content-center d-none d-md-flex pt-5">';
    }
    echo '<div class="col-3 d-flex justify-content-center text center">
            <a href="Plat.php' . $row['libelle'] . '">
                <div class="card bg-dark text-light">
                    <div class="card-header">
                        <p class="h3">' . $row['libelle'] . '</p>
                    </div>
                    <div class="card-body">
                        <img class="card-img-bottom" src="/bootstrap/assets/cat/' . $row['image'] . '" alt="image">
                    </div>
                </div>
            </a>
        </div>';
    $card++;
    if ($card == 4) {
        $card = 1;
        echo '</div>';
    }
}
        $stmt = $conn->query("select a.libelle, a.image from categorie a where a.libelle not in (select a.libelle from commande c join plat on plat.id = c.id_plat join categorie on plat.id_categorie = a.id group by a.id order by sum(quantite) desc) and active='Yes';");
        while ($row = $stmt->fetch()) {
            if ($card==1)
            {
                echo '<div class="row justify-content-center d-none d-md-flex pt-5">';
            }
            echo '<div class="col-3 d-flex justify-content-center text-center">
                    <a href="Plat.php'.$row['libelle'].'">
                    <div class="card bg-dark text-light">
                        <div class="card-header">
                            <p class="h3">'.$row['libelle'].'</p>
                        </div>
                        <div class="card-body">
                            <img class="card-img-bottom" src="/FRONT/STATIQUE/bootstrap/html/assets/cat/'.$row['image'].'"
                                alt="image">
                        </div>
                    </div>
                </a>
            </div>';
            $card++;
            if ($card==4)
            {
                $card=1;
                echo '</div>';
            }

        }
        $etat='Annulée';
        $stmt1=$conn->query("SELECT sum(quantite*prix), p.libelle, p.image from commande c join plat p where id_plat = p.id and c.etat != 'Annulée' group by p.libelle order by sum(quantite) desc limit 5");
        $stmt1->execute();
        
        echo '<div class="row justify-content-center d-flex row-cols-1 row-md-cols-3 py-4">';
        while ($row = $stmt1->fetch())
        {

            if($card <= 3){
            echo '<div class="col-12 col-md-4 justify-content-center d-flex text-center">
            <a href="#">
            <div class="card bg-dark text-light">
                <div class="card-header">
                    <p class="h3">'.$row['libelle'].'</p>
                </div>
                <div class="card-body">
                    <img class="card-img-bottom" src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/all'.$row['image'].'"
                        alt="image">
                </div>
            </div>
            </a>
        </div>';
            }
            if ($card>3)
            {
             echo '<div class="col-12 d-md-none justify-content-center d-flex text-center">
             <a href="#">
             <div class="card bg-dark text-light">
                 <div class="card-header">
                     <p class="h3">'.$row['libelle'].'</p>
                 </div>
                 <div class="card-body">
                     <img class="card-img-bottom" src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/all'.$row['image'].'"
                         alt="image">
                 </div>
             </div>
             </a>
         </div>';
        }
            }
        $card++;
        
        echo '</div>';
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

</html>