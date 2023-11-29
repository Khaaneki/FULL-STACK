<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    


<form action="login_script.php" method="post">

<label for="Login">Login : </label> <input type="text" placeholder="login" name="login"><br>
<label for="Password">Password : </label> <input type="password" placeholder="password" name="password"><br>
<input type="submit" value="Se connecter">
<input type="reset" value="Annuler">



</form>
</body>
</html>

<?php

session_start();

?>