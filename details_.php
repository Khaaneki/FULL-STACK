<?php
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'root', '');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if (isset($_GET["disc_id"])) {
    $disc_id = $_GET["disc_id"];
    $requete = $db->prepare("SELECT * FROM disc WHERE disc_id = ?");
    $requete->execute(array($disc_id));
    
    if ($requete->rowCount() > 0) {
        $disc = $requete->fetch(PDO::FETCH_OBJ);
    } else {
        $errorMessage = "Le disque avec l'ID $disc_id n'existe pas.";
    }
} else {
    $errorMessage = "Le paramètre disc_id est manquant.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Détails du disque</title>
</head>
<body>
    <?php if (isset($disc)): ?>
        Disc N° <?= $disc->disc_id ?><br>
        Disc name <?= $disc->disc_name ?><br>
        Disc year <?= $disc->disc_year ?><br>
    <?php else: ?>
        <p><?= isset($errorMessage) ? $errorMessage : "Erreur inconnue." ?></p>
    <?php endif; ?>
</body>
</html>
