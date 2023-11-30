<?php

include 'Myadmin.php';

$stmt = $conn->query("SELECT * FROM plat");
$stmt1 = $conn->query("SELECT * FROM categorie");

$plats = [
    ['id' => 1, 'libelle' => 'Sushi', 'description' => 'saumon, riz', 'prix' => 10.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/sushi_Resized/sushiiiiii.jpeg', 'id_categorie' => 12],
    ['id' => 2, 'libelle' => 'Maki', 'description' => 'saumon, algue, riz', 'prix' => 10.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/sushi_Resized/sushiiiiiii.jpeg', 'id_categorie' => 12],
    ['id' => 3, 'libelle' => 'Nems', 'description' => 'poulet, vermicelles de riz, sauce nuoc mam', 'prix' => 4.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/sushi_Resized/nems poulet.jpg', 'id_categorie' => 12],
    ['id' => 4, 'libelle' => 'Onigiri', 'description' => 'riz, algue, saumon', 'prix' => 3.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/sushi_Resized/Onigiri.jpg', 'id_categorie' => 12],
    ['id' => 5, 'libelle' => 'Royal', 'description' => 'steak haché, salade, bacon', 'prix' => 8, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/Food-Name-6340.jpg', 'id_categorie' => 5],
    ['id' => 6, 'libelle' => 'Cheeseburger', 'description' => 'steak haché, salade, bacon', 'prix' => 5.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/cheesburger.jpg', 'id_categorie' => 5],
    ['id' => 7, 'libelle' => 'Slider', 'description' => 'steak haché, salade, tomate, fromage, bacon', 'prix' => 9.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/hamburger.jpg', 'id_categorie' => 5],
    ['id' => 8, 'libelle' => 'Hamburger', 'description' => 'steak haché, salade, tomate, fromage, mayonnaise', 'prix' => 6.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/burger_Resized/burger.jpeg', 'id_categorie' => 5],
    ['id' => 9, 'libelle' => 'Norvégienne', 'description' => 'crème fraiche, saumon, mozzarella', 'prix' => 12.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/pizza_Resized/pizza-salmon.png', 'id_categorie' => 4],
    ['id' => 10, 'libelle' => 'Burger', 'description' => 'boeuf haché, tomate, oignon, cheddar, sauce tomate', 'prix' => 13.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/pizza_Resized/pizza_burger.jpeg', 'id_categorie' => 4],
    ['id' => 11, 'libelle' => 'Margherita', 'description' => 'base de tomate, basilic, mozzarella', 'prix' => 12.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/pizza_Resized/pizza-margherita.jpg', 'id_categorie' => 4],
    ['id' => 12, 'libelle' => 'Fromage', 'description' => 'crème fraiche, 4 fromage', 'prix' => 11.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/pizza_Resized/pizza_4.jpg', 'id_categorie' => 4],
    ['id' => 13, 'libelle' => 'salade césar', 'description' => 'salade, poulet, tomate, mozzarella', 'prix' => 6.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/salade_Resized/cesar_salad.jpg', 'id_categorie' => 13],
    ['id' => 14, 'libelle' => 'salde thon', 'description' => 'oeuf, tomate, salade, poivron', 'prix' => 7.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/salade_Resized/salade.jpeg', 'id_categorie' => 13],
    ['id' => 15, 'libelle' => 'salade', 'description' => 'poulet, avocat, salade, concombre, tomate cerise', 'prix' => 8.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/salade_Resized/salade_1.jpeg', 'id_categorie' => 13],
    ['id' => 16, 'libelle' => 'simplade', 'description' => 'salade, navet, prunelle', 'prix' => 5.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/salade_Resized/salade_2.jpeg', 'id_categorie' => 13],
    ['id' => 17, 'libelle' => 'wrap heal', 'description' => 'salade, tomate, poulet, sauce maison', 'prix' => 4.50, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/wrap_Resized/Food-Name-3461.jpg', 'id_categorie' => 9],
    ['id' => 18, 'libelle' => 'wrapeur', 'description' => 'beef, tomate, salade, concombre, oignon, maïs', 'prix' => 5.00, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/swrapResized/wrap.jpeg', 'id_categorie' => 9],
    ['id' => 19, 'libelle' => 'wrapoule', 'description' => 'salade, poulet, tomate, sauce chef', 'prix' => 3.80, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/wrap_Resized/wrap.jpg', 'id_categorie' => 9],
    ['id' => 20, 'libelle' => 'corn-wrap', 'description' => 'poulet, légumes...', 'prix' => 4.20, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/wrap_Resized/wraps-poulet-legumes-640.jpg', 'id_categorie' => 9],
    ['id' => 21, 'libelle' => 'croque-monsieur', 'description' => 'dinde, fromage, crème fraiche', 'prix' => 3.60, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/croque_Resized/croque.jpeg', 'id_categorie' => 11],
    ['id' => 22, 'libelle' => '#', 'description' => '#', 'prix' => 4.20, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/croque_Resized/croque.jpg', 'id_categorie' => 11],
    ['id' => 23, 'libelle' => '#', 'description' => '#', 'prix' => 4.20, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/croque_Resized/Croque_monsieur_mozzarella_galbani.jpg', 'id_categorie' => 11],
    ['id' => 24, 'libelle' => '#', 'description' => '#', 'prix' => 4.20, 'image' => '/FRONT/STATIQUE/bootstrap/html/assets/Plat/croque_Resized/Food-Name-3631.jpg', 'id_categorie' => 11],
];

?>
