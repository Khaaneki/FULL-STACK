<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Formulaire d'inscription</title>
</head>
<body>
<div class="container" style="background-color: lightblue;">
    <h2>Inscription</h2>

    <form action="user_push.php" id="form1" method="post">
        <div class="form-group">
            <label for="login">Identifiant :</label>
            <input type="text" name="login" id="login" placeholder="Identifiant" class="form-control">
            <span class="text-danger" id="login_error"></span>
        </div>
        <div class="form-group">
            <label for="password">Mot de passe :</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe" class="form-control">
            <span class="text-danger" id="password_error"></span>
        </div>
        <div class="form-group">
            <label for="password_verif">Confirmation du mot de passe :</label>
            <input type="password" id="password_verif" placeholder="Confirmer le mot de passe" class="form-control">
            <span class="text-danger" id="password_verif_error"></span>
        </div>
        <div class="form-group">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" id="nom" placeholder="Nom" class="form-control">
            <span class="text-danger" id="nom_error"></span>
        </div>
        <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" class="form-control">
            <span class="text-danger" id="prenom_error"></span>
        </div>
        <div class="form-group">
            <label for="mail">E-mail :</label>
            <input type="email" name="mail" id="mail" placeholder="pierre@afpa.fr" class="form-control">
            <span class="text-danger" id="mail_error"></span>
</div>
   
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
<script src="formu_script.js" defer></script>

<?php

session_start();

if(isset($_SESSION['user']))
{
    $nbrcompte = count($_SESSION['user'])+1;
}else{
    $nbrcompte = 2;
}
echo $nbrcompte;
echo '<input type="hidden" name="nbcompte" value="'.$nbrcompte.'"><input type="submit" value="ENVOYER">
<input type="reset" value="ANNULER"></div></form>';

?>

</body>
</html>