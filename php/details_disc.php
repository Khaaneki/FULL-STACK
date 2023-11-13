<?php
$db = new PDO('mysql:host=localhost;charset=utf8;dbname=record', 'admin', 'Afpa1234');
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if(isset($_GET["disc_id"])) {
    $requete = $db->prepare("select * from disc where disc_id=?");
    $requete->execute(array($_GET["disc_id"]));
    $disc = $requete->fetch(PDO::FETCH_OBJ);

    if ($disc) {
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Test PDO</title>
</head>
<html>
<body>
    Disc N° <?= $disc->disc_id ?>
    Disc name : <?= $disc->disc_title ?>
    Disc year : <?= $disc->disc_year ?>
</body>
</html>
<?php
    } else {
        echo "Le disque n'existe pas.";
    }
} else {
    echo "Veuillez fournir un numéro de disque.";
}
?>
