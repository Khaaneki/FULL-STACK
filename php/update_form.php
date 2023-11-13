<!DOCTYPE html>
<html>
<head>
    <title>Modifier le disque</title>
</head>
<body>
    <?php
    include 'Myadmin.php';

    if (isset($_GET['disc_id'])) {
        $disc_id = $_GET['disc_id'];

        $stmt = $conn->prepare("SELECT * FROM disc WHERE disc_id = ?");
        $stmt->execute([$disc_id]);
        $disque = $stmt->fetch(PDO::FETCH_ASSOC);

        $artistes = $conn->query("SELECT artist_id, artist_name FROM artist")->fetchAll(PDO::FETCH_ASSOC);
    } else {
        header("record.php");
        exit;
    }
    ?>
<div class="container-fluid d-flex align-items-center justify-content-center">
    <h1>Modifier le disque</h1>

    <form action="update_script.php" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="disc_id" value="<?php echo $disque['disc_id']; ?>">

        <label for="disc_title">Titre du disque:</label>
        <input type="text" name="disc_title" value="<?php echo $disque['disc_title']; ?>"><br>

        <label for="artist_id">Artiste:</label>
        <select name="artist_id">
            <?php
            foreach ($artistes as $artiste) {
                $selected = ($artiste['artist_id'] == $disque['artist_id']) ? 'selected' : '';
                echo '<option value="' . $artiste['artist_id'] . '" ' . $selected . '>' . $artiste['artist_name'] . '</option>';
            }
            ?>
        </select><br>

        <label for="disc_year">Année :</label>
        <input type="text" name="disc_year" value="<?php echo $disque['disc_year']; ?>"><br>

        <label for="disc_genre">Genre :</label>
        <input type="text" name="disc_genre" value="<?php echo $disque['disc_genre']; ?>"><br>

        <label for="disc_price">Prix :</label>
        <input type="text" name="disc_price" value="<?php echo $disque['disc_price']; ?>"><br>

        <label for="disc_picture">Image du disque :</label>
        <input type="file" name="disc_picture"><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>
</div>
</body>
</html>
