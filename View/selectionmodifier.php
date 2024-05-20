<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Selection des modifications</title>
</head>
<body>
<?php
include 'header.php';
?>
<main>
    <header>
        <h1>Gestionnaire des modifications et suppressions</h1>
    </header>
    <div class="container">
        <div class="element">
            <h2>Oeuvre</h2>
            <a href="modifierOeuvre.php" class="button-link modify-button">Modifier</a>
        </div>
        <div class="element">
            <h2>Réalisateur</h2>
            <a href="modifierReal.php" class="button-link modify-button">Modifier</a>
        </div>
        <div class="element">
            <h2>Acteur</h2>
            <a href="modifierActeur.php" class="button-link modify-button">Modifier</a>
        </div>
        <div class="element">
            <h2>Genre</h2>
            <a href="modifierGenre.php" class="button-link modify-button">Modifier</a>
        </div>
        <div class="element">
            <h2>Classification</h2>
            <a href="modifierClassification.php" class="button-link modify-button">Modifier</a>
        </div>
    </div>
</main>
<?php
include 'footer.php';
?>
</body>
</html>