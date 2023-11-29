<?php

session_start();
error_reporting(E_ALL);
ini_set("display_errors",1);
$_SESSION['auth']='verif';
$_SESSION['login']=$_REQUEST['login'];
$verif=0;
$authi='NON';
foreach ($_SESSION['user'] as $cle => $valeur)
{
    if(is_array($valeur))
    {
        foreach($valeur as $cle => $value)
        {
          if ($cle=='login')
          {
            if($value==$_REQUEST['login'])
            {
                $verif+=1;
            }
          }
          if($cle=='password')
          {
            if($value==password_verify($_REQUEST['password'],$value)&&$verif==1)
            {
                $verif+=1;
                $_SESSION['password']=$value;
            }
          } 
        }
        if($verif==2)
        {
            $authi='OUI';
        }
        $verif=0;
    }
}



if($authi=='OUI')
{
$_SESSION['auth']='ok';
echo 'Bienvenue cher utilisateur' ;
header("Refresh: 3 ;URL=login_valide.php");

}else{
    unset($_SESSION['login']);
    unset($_SESSION['password']);
    unset($_SESSION['auth']);

    if (ini_get("session.use_cookies")) 
    {
        setcookie(session_name(), '', time()-42000);
    }

    session_destroy();
    echo 'Session non initialisée, utilisateur non trouvé';

header("Refresh: 10 ;URL=login_valide.php");
}














?>