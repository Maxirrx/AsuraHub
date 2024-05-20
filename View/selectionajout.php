

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Selection des ajouts</title>
</head>
<body>

<?php
include 'header.php';
?>
<main>
    <header>
        <h1>Gestionnaire des ajouts</h1>
    </header>
    </head>

    <div class="container">
        <div class="element">
            <h2>Oeuvre</h2>
            <a href="ajoutOeuvre" class="button-link add-button">Ajouter</a>
        </div>
        <div class="element">
            <h2>Réalisateur</h2>
            <a href="ajouterReal" class="button-link add-button">Ajouter</a>
        </div>
        <div class="element">
            <h2>Acteur</h2>
            <a href="ajouterActeur" class="button-link add-button">Ajouter</a>
        </div>
        <div class="element">
            <h2>Genre</h2>
            <a href="ajouterGenre.php" class="button-link add-button">Ajouter</a>
        </div>
        <div class="element">
            <h2>Classification</h2>
            <a href="ajouterClassification.php" class="button-link add-button">Ajouter</a>
        </div>
    </div>


</main>
<?php
include 'footer.php';
?>
</body>
</html>