<?php

session_start();

if (isset($_SESSION['auth']))
{
if($_SESSION['auth']=='ok')
    {
        echo 'bienvenue cher ' . $_SESSION['login'] . ' quel talent t\'as même tapé '. $_SESSION['password'] . ' dans le champ correspondant en plus ton authentification est ' . $_SESSION['auth'];
    }
}else 
{
    echo 'Tu n\'est pas censé être ici. Redirection vers la page de connexion.';
    header ("Refresh: 1 ;URL=login_form.php");
}

?>