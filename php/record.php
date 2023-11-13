<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    
    <title>Liste des disques</title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<a href="add_form.php">Ajouter un disque</a>
</div>
<?php
    include 'Myadmin.php';
    $stmt = $conn->query("SELECT * FROM disc d JOIN artist a ON d.artist_id = a.artist_id");
    $stmt2 = $conn->query("SELECT * FROM disc");        
    $rec = $stmt2->fetchALL(PDO::FETCH_OBJ);
    echo '<h1>LISTES LES DISQUES('.count($rec).')</h1>';
    echo '<div class="row">';
    $pair = 0;

    while ($row = $stmt->fetch()) {
        generateCard($row);
        $pair++;
        if ($pair % 2 === 0) {
            echo '</div> <div class="row mt-4">';
        }
    }

    function generateCard($row) {
        echo '
        <div class="col-md-6 mx-auto mb-4">
            <div class="card bg-dark rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="col-4">
                            <img src="img/' . $row['disc_picture'] . '" class="img-fluid" width="260">
                        </div>
                        <div class="col-8 position-static"> 
                            <p class="card-text text-light text-left font-weight-bold" style="font-size: 18px;">' . $row['disc_title'] . '</p>
                            <p class="card-text text-light text-left" style="font-size: 16px;">' . $row['artist_name'] . '</p>
                            <p class="card-text text-light text-left" style="font-size: 16px;">Label : ' . $row['disc_label'] . '</p>
                            <p class="card-text text-light text-left" style="font-size: 16px;">Year : ' . $row['disc_year'] . '</p>
                            <p class="card-text text-light text-left" style="font-size: 16px;">Genre : ' . $row['disc_genre'] . '</p>
                            <a href="detail.php?disc_id=' . $row['disc_id'] . '" class="btn btn-secondary">Détails</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>';
    }
    ?>
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
