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
        <div id="header"></div>
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
            <div class="col-12 d-none d-md-flex bg-dark justify-content-center " style="align-self: center;">
                <p class="h3 text-center text-light my-1">Nos catégories</p>
            </div>
        </div><!-- Fin separateur -->
        <!--Catégorie Start-->
        <div class="row justify-content-center d-none d-md-flex pt-5">
            <?php
            $categories = array("Sushi", "Hamburger", "Sandwich", "Salade", "Wrap", "Pizza");

            foreach ($categories as $category) {
                echo '<div class="d-flex col-3 justify-content-center text-center">
                        <a href="#">
                            <div class="card bg-dark text-light" style="max-width: 18rem;">
                                <div class="card-header">
                                    <p class="h3">' . $category . '</p>
                                </div>
                                <div class="card-body">
                                    <img class="card-img-bottom rounded" src="/FRONT/STATIQUE/bootstrap/html/assets/cat/' . strtolower($category) . '_cat.jpg" alt="' . strtolower($category) . '">
                                </div>
                            </div>
                        </a>
                    </div>';
            }
            ?>
        </div>
        </div><!--Catégorie End-->
        <!--Separateur Start-->
        <div class="row">
            <div class="col-12 d-md-flex bg-dark justify-content-center " style="align-self: center;">
                <p class="h3 text-center text-light my-1">Nos Plats</p>
            </div>
        </div><!--Separateur End-->
        <!-- Debut plats -->
        <div class="row d-flex">
                            <div class="col-12 d-md-flex  py-3 justify-content-center"
                                style="align-self: center;">
                                <p class="h1 text-center">Burger</p>
                            </div>
                        </div>
                        <div class="row row-cols-1 row-cols-lg-4 pt-3">
                            <div class="col-12 col-lg-3 pt-3 py-3">
                                <a href="#">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/burger.jpeg"
                                                        class="img-fluid" alt="burger">
                                                </div>
                                                <div class="col-8">
                                                    <p class="h3 text-light">Hamburger</p>
                                                    <p class="card-text text-light h4 py-3">salade, tomate,
                                                        mayonnaise</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-12 col-lg-3 pt-3 py-3">
                                <a href="#">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/hamburger.jpg"
                                                        class="card-img-top" alt="Hamburger">
                                                </div>
                                                <div class="col-8">
                                                    <p class="h3 text-light">Slider</p>
                                                    <p class="card-text text-light h4 py-3">salade, tomate,
                                                        fromage, bacon</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-12 col-lg-3 pt-3 py-3">
                                <a href="#">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/cheesburger.jpg"
                                                        class="card-img-top" alt="Cheeseburger">
                                                </div>
                                                <div class="col-8">
                                                    <p class="h3 text-light">Cheeseburger</p>
                                                    <p class="card-text text-light h4 py-3">steack haché, fromage,
                                                        barbecue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </a>
                            </div>
                            <div class="col-12 col-lg-3 pt-3 py-3">
                                <a href="#">
                                    <div class="card bg-dark text-light">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-4">
                                                    <img src="/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/Food-Name-6340.jpg"
                                                        class="card-img-top" alt="burger">
                                                </div>
                                                <div class="col-8">
                                                    <p class="h3 text-light">Royal</p>
                                                    <p class="card-text text-light h4 py-3">steack haché, salade,
                                                        bacon</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
        </div><!--femeture de la row dans laquelle carousel integré-->
        <!-- Fin plats -->
        <div id="footer"></div>
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