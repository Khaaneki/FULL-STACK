<?php

$tab= array(4,3,8,2);
$resultat= somme($tab);

function somme ($tab)
{
$somme=0;
foreach($tab as $element)
{
 $somme=$somme+$element;
}
return $somme;
}

echo $resultat;

?>