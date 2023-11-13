<?php
$servername = "localhost";
$username = "admin";
$password = "Afpa1234";
$dbname = "District";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connecté avec succès à la base de données <br>";
    
    $stmt = $conn->query("SELECT * FROM plat");
    $stmt->execute();

    $plats = $stmt->fetchAll(PDO::FETCH_OBJ);
    foreach ($plats as $plat) {
        echo $plat->libelle . "<br>";
    }

} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données: " . $e->getMessage();
}
?>