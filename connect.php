<!DOCTYPE html>
<html>
    <head>
        <meta charser="utf-8"/>
        <link rel="stylesheet" href="css/header.css">
        <link rel="stylesheet" href="css/connect.css">
    </head>
</html>
<body>
    <?php include "header-connect.php"?>

    <div id="connect-box">
        <form action="" method="post">
            <label for="user">Utilisateur</label>
            <input type="text" name="user" id="user" placeholder="Utilisateur">
            <label for="password">Mot de passe</label>
            <input type="password" name="password" id="password" placeholder="Mot de passe">
            <input type="submit" value="Connexion">
        </form>
    </div>
</body>