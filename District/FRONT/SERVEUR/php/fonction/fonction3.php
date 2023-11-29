<?php
function complex_password($code)
{
    $lettre=array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','w','X','Y','Z');
    $nombre=array('1','2','3','4','5','6','7','8','9','0');
 if(strlen($code)>8)
 {
foreach($lettre as $element)
 if(strpos($code,$element)!=false)
{
 foreach($lettre as $lower)
 {
    if(strpos($code,strtolower($lower))!=false)
    {
        foreach($nombre as $v)
        {
            if(strpos($code,$v)!=false)
            {
             $verif=true;
             return $verif;
            }else{
                $verif=false;
            }
        }
    }else{
        $verif=false;
    }
 }

}else{
    $verif=false;
}
 }else{
    $verif=false;
 }
 return $verif;
}
$resultat=complex_password('TopSecret42');
if ($resultat==true)
{
    echo 'mot de passe valide ';
}else
{
    echo 'mot de passe invalide ';
}

?>