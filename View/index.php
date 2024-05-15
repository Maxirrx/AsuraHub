<?php
    $title = 'helloworld';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Acceuil</title>
</head>
<body>
<?php
    include 'header.php';
include '../Controler/Controler.php';
?>
    <main>
        <section class="films">
            <h2>A L'Affiche</h2>
            <div class="film-card">
                <h3>Titre du film 1</h3>
                <p>Résumé du film 1...</p>
                <p>Année de parution : 2020</p>
                <p>Nombre d'épisodes : 1</p>
            </div>
            <div class="film-card">
                <h3>Titre du film 1</h3>
                <p>Résumé du film 1...</p>
                <p>Année de parution : 2020</p>
                <p>Nombre d'épisodes : 1</p>
            </div>
            <div class="film-card">
                <h3>Titre du film 1</h3>
                <p>Résumé du film 1...</p>
                <p>Année de parution : 2020</p>
                <p>Nombre d'épisodes : 1</p>
            </div>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>