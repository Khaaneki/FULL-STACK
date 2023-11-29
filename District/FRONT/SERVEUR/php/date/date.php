<?php

$time = new DateTimeImmutable("2019-01-01 UTC");
$time2 = new DateTimeImmutable("2019-07-14 UTC");
$interval = $time->diff($time2);
echo "nombre de semaines: ", floor($interval->format("%a")/7), "\n";


$date = new DateTime();

echo $date->format("d/m/y \n");

$dateFin = new DateTimeImmutable("2023-10-13 UTC");

echo $dateFin->format("d/m/y \n");

$jourRestant = date_diff($date,$dateFin);

echo "<br>Nombre de jours de formations restants " , $jourRestant->format("%R%a"), "\n";




function AnneeBissextile($annee)
{
$Multiple = ( ($annee % 400) == 0);
$Multiple2 = ( ($annee % 4) == 0);
$Multiple3 = ( ($annee % 100) != 0);
return ( $Multiple || ( $Multiple2 &&
$Multiple3 ) );
}

$a = date("y");

if(AnneeBissextile($a))
$message = $a." <br>C'est une année bissextile ";
else $message = $a."<br> Ce n'est pas une année bissextile ";
echo $message;

?>