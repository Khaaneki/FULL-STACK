<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "District";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion " . $e->getMessage();
}

$stmt = $conn->query("SELECT * FROM plat");
$stmt1 = $conn->query("SELECT * FROM categorie");

$id_categorie2=12; 

$id=1;
$libelle='Sushi';
$description='saumon, riz';
$prix=10.50;
$image='sushiiiiii.jpeg';

$id_categorie2=5; 

$id1=2;
$libelle1='Royal';
$description1='steak haché, salade, bacon';
$prix1=7.50;
$image1='Food-Name-6340.jpg';

$id_categorie2=4; 

$id2=3;
$libelle2='Norvégienne';
$description2='crème fraiche, saumon, mozzarella';
$prix2=12.50;
$image2='pizza-salmon.png';

$id_categorie2=13; 

$id3=4;
$libelle3='Salade césar';
$description3='salade, poulet, tomate, mozzarella';
$prix3=6.50;
$image3='cesar_salad.jpg';

$id_categorie2=10; 

$id4=5;
$libelle4='Wrap heal';
$description4='salade, tomate, poulet, sauce maison';
$prix4=4.50;
$image4='Food-Name-3461.jpg';

$id_categorie2=11; 

$id5=6;
$libelle5='Croque-monsieur';
$description5='dinde, fromage, crème fraiche';
$prix5=3.60;
$image5='croque.jpeg';


try {

$stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id);
    $stmt->bindParam(':libelle',$libelle);
    $stmt->bindParam(':description',$description);
    $stmt->bindParam(':prix',$prix);
    $stmt->bindParam(':image',$image);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id1);
    $stmt->bindParam(':libelle',$libelle1);
    $stmt->bindParam(':description',$description1);
    $stmt->bindParam(':prix',$prix1);
    $stmt->bindParam(':image',$image1);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id2);
    $stmt->bindParam(':libelle',$libelle2);
    $stmt->bindParam(':description',$description2);
    $stmt->bindParam(':prix',$prix2);
    $stmt->bindParam(':image',$image2);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("UPDATE plat SET libelle=:libelle, description=:description, prix=:prix, image=:image, id_categorie=:id_categorie, active=:active   WHERE id=:id");
    $stmt->bindParam(':id',$id3);
    $stmt->bindParam(':libelle',$libelle3);
    $stmt->bindParam(':description',$description3);
    $stmt->bindParam(':prix',$prix3);
    $stmt->bindParam(':image',$image3);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id4);
    $stmt->bindParam(':libelle',$libelle4);
    $stmt->bindParam(':description',$description4);
    $stmt->bindParam(':prix',$prix4);
    $stmt->bindParam(':image',$image4);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

    $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    $stmt->bindParam(':id',$id5);
    $stmt->bindParam(':libelle',$libelle5);
    $stmt->bindParam(':description',$description5);
    $stmt->bindParam(':prix',$prix5);
    $stmt->bindParam(':image',$image5);
    $stmt->bindParam(':id_categorie',$id_categorie);
    $stmt->bindParam(':active',$active);
    $stmt->execute();

} catch (PDOException $e) {
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
}

?>
