<?php

$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "district";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Erreur de connexion " . $e->getMessage();
}

$stmt = $conn->query("SELECT * FROM plat");
$stmt1 = $conn->query("SELECT * FROM categorie");

$id_categorie=12; 

$id=1;
$libelle='Sushi';
$description='saumon, riz';
$prix=10.50;
$image='sushiiiiii.jpeg';
$active='Yes';

$id1=2;
$libelle1='Maki';
$description1='saumon, algue, riz';
$prix1=7.50;
$image1='sushiiiiiii.jpeg';

$id2=3;
$libelle2='Nems';
$description2='poulet, vermicelles de riz, sauce nuoc mam';
$prix2=4.50;
$image2='nems poulet.jpg';

$id3=4;
$libelle3='Onigiri';
$description3='riz, algue, saumon ou thon';
$prix3=3.50;
$image3='Onigiri.jpg';

$id_categorie1=5; 

$id4=5;
$libelle4='Royal';
$description4='steak haché, salade, bacon';
$prix4=7.50;
$image4='Food-Name-6340.jpg';

$id5=6;
$libelle5='Cheeseburger';
$description5='steak haché, salade, bacon';
$prix5=5.50;
$image5='cheesburger.jpg';

$id6=7;
$libelle6='Slider';
$description6='steak haché, salade, tomate, fromage';
$prix6=9.50;
$image6='hamburger.jpg';

$id7=8;
$libelle7='Hamburger';
$description7='steak haché, salade, tomate, fromage, mayonnaise';
$prix7=6.50;
$image7='burger.jpeg';

$id_categorie2=4; 

$id8=9;
$libelle8='Norvégienne';
$description8='crème fraiche, saumon, mozzarella';
$prix8=12.50;
$image8='pizza-salmon.png';

$id9=10;
$libelle9='Burger';
$description9='boeuf haché, tomate, oignon, cheddar, sauce tomate';
$prix9=13.50;
$image9='pizza_burger.jpeg';

$id10=11;
$libelle10='Marghrita';
$description10='base de tomate, basilic, mozzarella';
$prix10=12.50;
$image10='pizza-margherita.jpg';

$id11=12;
$libelle11='Fromage';
$description11='crème fraiche, 4 fromage';
$prix11=11.50;
$image11='pizza_4.jpg';

$id_categorie3=13; 

$id12=13;
$libelle12='Salade césar';
$description12='salade, poulet, tomate, mozzarella';
$prix12=5.50;
$image12='cesar_salad.jpg';

$id13=14;
$libelle13='Salade thon';
$description13='oeuf, tomate, salade, poivron, thon';
$prix13=4.50;
$image13='salade.jpeg';

$id14=15;
$libelle14='Salade';
$description14='poulet, avocat, salade, concombre, tomate cerise';
$prix14=6.50;
$image14='salade_1.jpeg';

$id15=16;
$libelle15='Simplade';
$description15='salade, navet, prunelle';
$prix15=6.50;
$image15='salade_2.jpeg';

$id_categorie4=9; 

$id16=17;
$libelle16='Wrap heal';
$description16='salade, tomate, poulet, sauce maison';
$prix16=4.50;
$image16='Food-Name-3461.jpg';

$id17=18;
$libelle17='Wrapeur';
$description17='beef, tomate, salade, concombre, oignon, maïs';
$prix17=5.00;
$image17='wrap.jpeg';

$id18=19;
$libelle18='Wrapoule';
$description18='salade, poulet, tomate, sauce chef';
$prix18=3.80;
$image18='wrap.jpg';

$id19=20;
$libelle19='Corn-wrap';
$description19='poulet, légumes...';
$prix19=4.20;
$image19='wraps-poulet-legumes-640.jpg';

$id_categorie5=11; 

$id20=21;
$libelle20='Croque-monsieur';
$description20='dinde, fromage, crème fraiche';
$prix20=2.70;
$image20='croque.jpeg';

$id21=22;
$libelle21='Croque a l\'oeuf';
$description21='dinde, fromage, crème fraiche, oeuf';
$prix21=2.80;
$image21='croque.jpg';

$id22=23;
$libelle22='Croque-monsieur';
$description22='jambon, mozzarella';
$prix22=2.60;
$image22='Croque_monsieur_mozzarella_galbani.jpg';

$id23=24;
$libelle23='Croquemage';
$description23='fromage';
$prix23=2.50;
$image23='Food-Name-3631.jpg';

$disable='No';

try {

$conn -> beginTransaction();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id);
    // $stmt->bindParam(':libelle',$libelle);
    // $stmt->bindParam(':description',$description);
    // $stmt->bindParam(':prix',$prix);
    // $stmt->bindParam(':image',$image);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id1);
    // $stmt->bindParam(':libelle',$libelle1);
    // $stmt->bindParam(':description',$description1);
    // $stmt->bindParam(':prix',$prix1);
    // $stmt->bindParam(':image',$image1);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id2);
    // $stmt->bindParam(':libelle',$libelle2);
    // $stmt->bindParam(':description',$description2);
    // $stmt->bindParam(':prix',$prix2);
    // $stmt->bindParam(':image',$image2);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id3);
    // $stmt->bindParam(':libelle',$libelle3);
    // $stmt->bindParam(':description',$description3);
    // $stmt->bindParam(':prix',$prix3);
    // $stmt->bindParam(':image',$image3);
    // $stmt->bindParam(':id_categorie',$id_categorie);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id4);
    // $stmt->bindParam(':libelle',$libelle4);
    // $stmt->bindParam(':description',$description4);
    // $stmt->bindParam(':prix',$prix4);
    // $stmt->bindParam(':image',$image4);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id5);
    // $stmt->bindParam(':libelle',$libelle5);
    // $stmt->bindParam(':description',$description5);
    // $stmt->bindParam(':prix',$prix5);
    // $stmt->bindParam(':image',$image5);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id6);
    // $stmt->bindParam(':libelle',$libelle6);
    // $stmt->bindParam(':description',$description6);
    // $stmt->bindParam(':prix',$prix6);
    // $stmt->bindParam(':image',$image6);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id7);
    // $stmt->bindParam(':libelle',$libelle7);
    // $stmt->bindParam(':description',$description7);
    // $stmt->bindParam(':prix',$prix7);
    // $stmt->bindParam(':image',$image7);
    // $stmt->bindParam(':id_categorie',$id_categorie1);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id8);
    // $stmt->bindParam(':libelle',$libelle8);
    // $stmt->bindParam(':description',$description8);
    // $stmt->bindParam(':prix',$prix8);
    // $stmt->bindParam(':image',$image8);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id9);
    // $stmt->bindParam(':libelle',$libelle9);
    // $stmt->bindParam(':description',$description9);
    // $stmt->bindParam(':prix',$prix9);
    // $stmt->bindParam(':image',$image9);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id10);
    // $stmt->bindParam(':libelle',$libelle10);
    // $stmt->bindParam(':description',$description10);
    // $stmt->bindParam(':prix',$prix10);
    // $stmt->bindParam(':image',$image10);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id11);
    // $stmt->bindParam(':libelle',$libelle11);
    // $stmt->bindParam(':description',$description11);
    // $stmt->bindParam(':prix',$prix11);
    // $stmt->bindParam(':image',$image11);
    // $stmt->bindParam(':id_categorie',$id_categorie2);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id12);
    // $stmt->bindParam(':libelle',$libelle12);
    // $stmt->bindParam(':description',$description12);
    // $stmt->bindParam(':prix',$prix12);
    // $stmt->bindParam(':image',$image12);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id13);
    // $stmt->bindParam(':libelle',$libelle13);
    // $stmt->bindParam(':description',$description13);
    // $stmt->bindParam(':prix',$prix13);
    // $stmt->bindParam(':image',$image13);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id14);
    // $stmt->bindParam(':libelle',$libelle14);
    // $stmt->bindParam(':description',$description14);
    // $stmt->bindParam(':prix',$prix14);
    // $stmt->bindParam(':image',$image14);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id15);
    // $stmt->bindParam(':libelle',$libelle15);
    // $stmt->bindParam(':description',$description15);
    // $stmt->bindParam(':prix',$prix15);
    // $stmt->bindParam(':image',$image15);
    // $stmt->bindParam(':id_categorie',$id_categorie3);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id16);
    // $stmt->bindParam(':libelle',$libelle16);
    // $stmt->bindParam(':description',$description16);
    // $stmt->bindParam(':prix',$prix16);
    // $stmt->bindParam(':image',$image16);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id17);
    // $stmt->bindParam(':libelle',$libelle17);
    // $stmt->bindParam(':description',$description17);
    // $stmt->bindParam(':prix',$prix17);
    // $stmt->bindParam(':image',$image17);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id18);
    // $stmt->bindParam(':libelle',$libelle18);
    // $stmt->bindParam(':description',$description18);
    // $stmt->bindParam(':prix',$prix18);
    // $stmt->bindParam(':image',$image18);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("UPDATE plat SET libelle = :libelle, description=:description, prix = :prix, image=:image, id_categorie=:id_categorie, active = :active   WHERE id = :id");
    // $stmt->bindParam(':id',$id19);
    // $stmt->bindParam(':libelle',$libelle19);
    // $stmt->bindParam(':description',$description19);
    // $stmt->bindParam(':prix',$prix19);
    // $stmt->bindParam(':image',$image19);
    // $stmt->bindParam(':id_categorie',$id_categorie4);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id20);
    // $stmt->bindParam(':libelle',$libelle20);
    // $stmt->bindParam(':description',$description20);
    // $stmt->bindParam(':prix',$prix20);
    // $stmt->bindParam(':image',$image20);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id21);
    // $stmt->bindParam(':libelle',$libelle21);
    // $stmt->bindParam(':description',$description21);
    // $stmt->bindParam(':prix',$prix21);
    // $stmt->bindParam(':image',$image21);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id22);
    // $stmt->bindParam(':libelle',$libelle22);
    // $stmt->bindParam(':description',$description22);
    // $stmt->bindParam(':prix',$prix22);
    // $stmt->bindParam(':image',$image22);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

    // $stmt = $conn->prepare("INSERT INTO plat (libelle, description, prix, image, active, id_categorie, id) VALUES (:libelle, :description, :prix, :image, :active, :id_categorie, :id)");
    // $stmt->bindParam(':id',$id23);
    // $stmt->bindParam(':libelle',$libelle23);
    // $stmt->bindParam(':description',$description23);
    // $stmt->bindParam(':prix',$prix23);
    // $stmt->bindParam(':image',$image23);
    // $stmt->bindParam(':id_categorie',$id_categorie5);
    // $stmt->bindParam(':active',$active);
    // $stmt->execute();

// $stmt1 = $conn->PREPARE("UPDATE categorie SET active = :active where id = :id");
// $stmt1-> bindParam(':active',$disable);
// $stmt1-> bindParam(':id',$id14);
// $stmt1->execute();

// $stmt1 = $conn->PREPARE("UPDATE categorie SET active = :active where id = :id");
// $stmt1-> bindParam(':active',$disable);
// $stmt1-> bindParam(':id',$id10);
// $stmt1->execute();

    $conn -> commit();

} catch (PDOException $e) {
    $conn->rollback();
    echo "Erreur : " . $e->getMessage();
}

?>