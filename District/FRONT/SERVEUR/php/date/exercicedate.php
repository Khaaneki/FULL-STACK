<?php

$date =  DateTime::createFromFormat("d/m/Y H:i:s", "32/17/2019 03:42:11");

$errors = DateTime::getLastErrors();

if ($errors["error_count"]>0 || $errors["warning_count"]>0) {
    echo "ARGHHHH !";
}

echo ('la variable errors n\'est pas vide, la date est non valide. <br>' );

$heure=new DateTime();

echo $heure->format("h");
echo("h");
echo $heure ->format('i');

echo ('ajouter 1 mois <br>');
$duree = new DateInterval("P1M");

date_add($heure,$duree);

echo $heure->format('d/m/Y');

$seconde = date("d/m/Y H:i:s", 1000200000);
echo '<br> 1000200000 Secondes depuis le 1 janvier 1970 équivaut à la date du '. $seconde;
?>