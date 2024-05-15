<?php
    $title = 'helloworld';
    $details_film = [
            'title' => 'Fast and Furious',
            'content' => 'Dans "Fast & Furious X", Dom Toretto et sa famille se retrouvent confrontés à leur ennemi le plus dangereux : un revenant vengeur déterminé à les détruire. Traqués à travers le monde, de Los Angeles à Rome en passant par le Brésil et Londres, Dom et son équipe doivent faire face à de nouvelles alliances et d\'anciens ennemis. Mais lorsque Dom découvre que la cible principale de leur ennemi est son propre fils de 8 ans, la lutte pour la survie devient personnelle et impitoyable.',
            'yearOfRelease' => 2023,
            'numbersOfEpisodes' => 1,
            'poster' => './assets/images/fast_furious_x.webp',
    ];

include '../Controler/Controler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Document</title>
</head>
<body>
<?php
    include 'header.php';
?>
    <main>
    <section class="details_films">
        <h2>details_films</h2>
            <div class="details_film-card">
                <h3><?= $details_film['title'] ?></h3>
                <img class="details_film-poster" alt="<?= $details_film['title'] ?>" src="<?= $details_film['poster'] ?>" />
                <p><?= $details_film['content'] ?></p>
                <p><?= $details_film['yearOfRelease'] ?></p>
                <p><?= $details_film['numbersOfEpisodes'] ?></p>
            </div>
    </section>
</main>
<?php
   include 'footer.php';
?>
</body>
</html>