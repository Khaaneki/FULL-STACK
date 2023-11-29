<?php

$file = file_get_contents('https://ncode.amorce.org/ressources/Pool/NEW_MS_FULL_STACK/WEB_PHP/liens.txt');
echo '<br>'.$file.'<br><br>';

$csv = file_get_contents('https://ncode.amorce.org/customers.csv');
echo $csv. '<br>';

$csv2=file('https://ncode.amorce.org/customers.csv');

echo '<br><table border=5><thead><th>Surname</th><th>Firstname</th><th>Email</th><th>Phone</th><th>City</th><th>State</th></thead>';

foreach ($csv2 as $value)
{
    $ligne = $value; 
    $exp = explode(',',$ligne);
    echo '<tr>';
    foreach ($exp as $value)
    {
        echo '<td>'.$value.'</td>';
    }
    echo '</tr>';
}

?>