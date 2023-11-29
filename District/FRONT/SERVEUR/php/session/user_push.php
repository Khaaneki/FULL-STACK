<?php

session_start();
$_SESSION['nbcompte']=$_REQUEST['nbcompte'];
if(!isset($_SESSION['user']))
{
 $_SESSION['user']=array( array( 
    "nom" => "N/A",
    "prenom" => "N/A",
    "e-mail" => "N/A",
    "login" => "admin",
    "password" => "admin",
    "password"=> password_hash("admin",PASSWORD_DEFAULT)

 ));

}

if(isset($_SESSION['user']))
{
 if ($_SESSION['nbcompte']>count($_SESSION['user']))
 {

    array_push($_SESSION['user'], array(

    "nom" => $_REQUEST['nom'],
    "prenom" => $_REQUEST['prenom'],
    "e-mail" => $_REQUEST['mail'],
    "login" => $_REQUEST['login'],
    "password"=>  password_hash($_REQUEST['password'],PASSWORD_DEFAULT)

    ));
 }
}
foreach ($_SESSION['user'] as $cle => $valeur)
{
    echo $cle.' : ';
    if(is_array($valeur))
    {
        foreach($valeur as $cle => $value)
        {
            echo $cle.' : '.$value.'<br>';
        }
    }
}

header("Refresh: 3,URL=login_form.php");




?>