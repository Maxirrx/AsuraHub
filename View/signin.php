<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Connexion</title>
</head>
<body>
<?php
include 'header.php';
include '../Controler/Controler.php';
?>
    <main>
        <div class="login-container">
            <h2>Connexion</h2>
            <form class="login-form" action="login.php" method="post">
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="submit" value="Se connecter">

            </form>
            <p>Vous n'avez pas de compte ? <a href='signup'>S'inscrire</a></p> 

        </div>
    </main>
<?php
   include 'footer.php';
?>
</body>
</html>
