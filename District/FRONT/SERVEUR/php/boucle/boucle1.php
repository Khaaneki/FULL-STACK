<?php

$min = 1;
$max = 150;
 
echo 'Les chiffres impairs compris entre '.$min.' et '.$max.' sont:';
 
for($i = $min; $i < $max ; $i++ ){
    if ($i%2!=0)
    {
      echo $i.' ';
    }
}

?>