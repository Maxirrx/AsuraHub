<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Inscription</title>
</head>
<body>
<?php
   include 'header.php';
include '../Controler/Controler.php';
?>
    <main>
        <div class="signup-container">
            <h2>Inscription</h2>
            <form class="signup-form" action="register.php" method="post">
                <input type="text" name="name" placeholder="Nom" required>
                <input type="email" name="email" placeholder="E-mail" required>
                <input type="password" name="password" placeholder="Mot de passe" required>
                <input type="submit" value="S'inscrire">
            </form>
        </div>
    </main>
<?php
   include 'footer.php';
?>
</body>
</html>
