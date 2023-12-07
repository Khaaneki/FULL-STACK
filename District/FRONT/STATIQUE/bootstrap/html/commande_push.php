<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom_prenom = $_POST["nom_prenom"];
    $mail = $_POST["mail"];
    $tel = $_POST["tel"];
    $adresse = $_POST["adresse"];

    $datecourante = date("Y-m-d-H-i-s") . ".txt";

    $fichier = fopen($datecourante, "x+");


    if ($fichier) {
        fwrite($fichier, "Nom et Pénom : " . $nom_prenom . "\n");
        fwrite($fichier, "E-mail : " . $mail . "\n");
        fwrite($fichier, "Telephone : " . $tel . "\n");
        fwrite($fichier, "Adresse : " . $adresse . "\n");

        fclose($fichier);
        echo "Les informations ont été enregistrées " . $datecourante;
    } else {
        echo "Une erreur s'est produite lors de l'ouverture du fichier.";
    }
}
?>