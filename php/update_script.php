<?php
include 'Myadmin.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $disc_id = $_POST['disc_id'];
    $disc_title = $_POST['disc_title'];
    $artist_id = $_POST['artist_id'];
    $disc_year = $_POST['disc_year'];
    $disc_genre = $_POST['disc_genre'];
    $disc_price = $_POST['disc_price'];

    if (isset($_FILES['disc_picture']) && $_FILES['disc_picture']['error'] === UPLOAD_ERR_OK) {
        $file_name = $_FILES['disc_picture']['name'];
        
        move_uploaded_file($_FILES['disc_picture']['tmp_name'], 'images/' . $file_name);
        
        $stmt = $conn->prepare("UPDATE disc SET disc_title = ?, artist_id = ?, disc_year = ?, disc_genre = ?, disc_price = ?, disc_picture = ? WHERE disc_id = ?");
        $stmt->execute([$disc_title, $artist_id, $disc_year, $disc_genre, $disc_price, $file_name, $disc_id]);
    } else {
        $stmt = $conn->prepare("UPDATE disc SET disc_title = ?, artist_id = ?, disc_year = ?, disc_genre = ?, disc_price = ? WHERE disc_id = ?");
        $stmt->execute([$disc_title, $artist_id, $disc_year, $disc_genre, $disc_price, $disc_id]);
    }

    header("location: record.php");
    exit;
}