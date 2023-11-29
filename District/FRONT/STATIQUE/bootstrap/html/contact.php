<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $mail = $_POST["mail"];
    $telephone = $_POST["telephone"];
    $question = $_POST["commentaire"];

    $datecourante = date("Y-m-d-H-i-s") . ".txt";

    $fichier = fopen($datecourante, "x+");


    if ($fichier) {
        fwrite($fichier, "Nom : " . $nom . "\n");
        fwrite($fichier, "Prénom : " . $prenom . "\n");
        fwrite($fichier, "E-mail : " . $mail . "\n");
        fwrite($fichier, "Telephone : " . $telephone . "\n");
        fwrite($fichier, "Question : " . $question . "\n");

        fclose($fichier);
        echo "Les informations ont été enregistrées " . $datecourante;
    } else {
        echo "Une erreur s'est produite lors de l'ouverture du fichier.";
    }
}
?>

