<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire</title>
</head>
<body>
<?php
include 'Myadmin.php';
$stmt = $conn->query("SELECT * FROM artist join disc ON disc.artist_id=artist.artist_id");
$attach = $stmt->fetchAll(PDO::FETCH_OBJ);
?>
<div class="container-fluid d-flex align-items-center justify-content-center">
<form action="add_script.php" name="form1" method="post">
<div class="row justify-content-center"><h2>Ajouter un vinyle</h2></div>
    <div class="row pt-3">
        <div class="col-12">
            <label for="title">Title</label><br>
            <input type="text" name="title" placeholder="Enter title">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <label for="artist">Artist</label><br>
<select name="artist">
    <option value="">--Please select an artist--</option>
    <?php 
    $uniqueArtists = array();

    foreach ($attach as $a) {
        if (!isset($uniqueArtists[$a->artist_id])) {
            echo '<option value="' . $a->artist_id . '">' . $a->artist_name . '</option>';
            $uniqueArtists[$a->artist_id] = true;
        }
    }
    ?>
</select>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="year">Year</label><br>
            <input type="text" name="year" placeholder="Enter year">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="genre">Genre</label><br>
            <input type="text" name="genre" placeholder="Enter genre (Rock, Pop, Prog ...)">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="label">Label</label><br>
            <input type="text" name="label" placeholder="Enter label (EMI, Warner, PolyGram, Universal ...)">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="price">Price</label><br>
            <input type="text" name="price" placeholder="">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <label for="picture">Picture</label><br>
            <input type="file" name="picture">
        </div>
    </div>
    <div class="row mt-4">
            <div class="col-6 text-right">
                <button type="reset" class="btn btn-secondary btn-lg d-inline">Annuler</button>
            </div>
            <div class="col-6 text-left">
                <button type="submit" class="btn btn-secondary btn-lg d-inline">Envoyer</button>
            </div>
    </div>
</form>
</div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" defer></script>
</body>
</html>
