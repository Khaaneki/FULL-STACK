<?php
include 'Myadmin.php';
$stmt2 = $conn->query("SELECT * FROM disc");   
try {
            $conn->beginTransaction();
            $stmt = $conn->prepare("INSERT INTO disc (disc_title, disc_year, disc_picture,disc_genre,disc_label,artist_id,disc_price) VALUES (:disc_title, :disc_year,:disc_picture, :disc_genre,:disc_label,:artist_id,:disc_price)");
            $stmt->bindValue(':disc_title', $_REQUEST['title']);
            $stmt->bindValue(':disc_year', $_REQUEST['year']);
            $stmt->bindValue(':disc_picture', $_REQUEST['picture']);
            $stmt->bindValue(':disc_genre', $_REQUEST['genre']);
            $stmt->bindValue(':disc_label', $_REQUEST['label']);
            $stmt->bindValue(':artist_id', $_REQUEST['artist']);
            $stmt->bindValue(':disc_price', $_REQUEST['price']);
            $stmt->execute();
            $conn->commit();
            echo 'Ajout dans la base de donnée effectué ! :)';
            header('Refresh: 5;URL=record.php');
        } catch (PDOException $e) {
            $conn->rollback();
            echo "Erreur : " . $e->getMessage();
        }

?>