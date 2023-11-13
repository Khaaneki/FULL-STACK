<?php
include 'Myadmin.php';

if (isset($_POST['disc_id'])) {
    $disc_id = $_POST['disc_id'];

    $stmt = $conn->prepare("DELETE FROM disc WHERE disc_id = ?");
    $stmt->execute([$disc_id]);

    if ($stmt->rowCount() > 0) {
        echo 'Le disque a été supprimé avec succès.';
    } else {
        echo 'La suppression du disque a échoué.';
    }
} else {
    echo 'ID du disque non spécifié.';
}
header("location: record.php");
?>