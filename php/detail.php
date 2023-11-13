<!DOCTYPE html>
<html>
<head>
    <title>Détail du disque</title>
</head>
<body>

<?php
include 'Myadmin.php';

if (isset($_GET['disc_id'])) {
    $disc_id = $_GET['disc_id'];
    $stmt = $conn->prepare("SELECT d.*, a.artist_name FROM disc d JOIN artist a ON d.artist_id = a.artist_id WHERE d.disc_id = ?");
    $stmt->execute([$disc_id]);
    $disque = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($disque) {
        echo '<h1>Détails du disque</h1>';
        echo '<p>ID du disque : ' .$disque['disc_id'] . '</p>';
        echo '<p>Titre : ' .$disque['disc_title'] . '</p>';
        echo '<p>Artiste : ' .$disque['artist_name'] . '</p>';
        echo '<p>Année : ' .$disque['disc_year'] . '</p>';
        echo '<p>Genre : ' .$disque['disc_genre'] . '</p>';
        echo '<p>Prix : ' .$disque['disc_price'] . '</p>';
        echo '<img src="img/'.$disque['disc_picture'].'""{$media}" width="260"></div>';
        
        echo '<p><a href="update_form.php?disc_id=' .$disque['disc_id'] . '">Modifier le disque</a></p>';
        echo '<p><a href="delete_disc.php?disc_id=' .$disque['disc_id'] . '">Supprimer le disque</a></p>';
        echo '<p><a href="record.php">Retour à la liste</a></p>';
    } else {
        echo 'Aucun disque trouvé avec l\'ID spécifié.';
    }
} else {
    echo 'ID du disque non spécifié.';
}
?>
<form action="update_form.php" method="post">
    <input type="hidden" name="disc_id" value="<?php echo $disque['disc_id']; ?>">
    <input type="submit" value="Modifier le disque">
</form>

<form action="delete_disc.php" method="post">
    <input type="hidden" name="disc_id" value="<?php echo $disc_id; ?>">
    <input type="submit" value="Supprimer">
</form>

<form action="record.php" method="post">
    <input type="submit" value="Retour à la liste">
</form>

</body>
</html>