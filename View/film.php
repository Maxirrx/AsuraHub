<?php
    $title = 'helloworld';
    $details_film = [
            'title' => 'Fast and Furious',
            'content' => 'Dans "Fast & Furious X", Dom Toretto et sa famille se retrouvent confrontés à leur ennemi le plus dangereux : un revenant vengeur déterminé à les détruire. Traqués à travers le monde, de Los Angeles à Rome en passant par le Brésil et Londres, Dom et son équipe doivent faire face à de nouvelles alliances et d\'anciens ennemis. Mais lorsque Dom découvre que la cible principale de leur ennemi est son propre fils de 8 ans, la lutte pour la survie devient personnelle et impitoyable.',
            'yearOfRelease' => 2023,
            'numbersOfEpisodes' => 1,
            'poster' => './assets/images/fast_furious_x.webp',
            'actors' => 'Acteurs : Vin Diesel, Michel Rodriguez, Jason Momoa, Tyrese Gibson, Ludacris, John Cena, Joradana Brewster',
            'realisator' => 'Réalisateur : Louis Leterrier',

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
        <div class="container">
            <div class="details_film-card">
                <img class="details_film-poster" alt="<?= $details_film['title'] ?>" src="<?= $details_film['poster'] ?>" />
                <div class="details_film-info">
                    <h2><?= $details_film['title'] ?></h2>
                    <p class="film-description"><?= $details_film['content'] ?></p>
                    <ul class="film-details">
                        <li><strong>Année de sortie:</strong> <?= $details_film['yearOfRelease'] ?></li>
                        <li><strong>Nombre d'épisodes:</strong> <?= $details_film['numbersOfEpisodes'] ?></li>
                        <li><strong>Acteurs:</strong> <?= $details_film['actors'] ?></li>
                        <li><strong>Réalisateur:</strong> <?= $details_film['realisator'] ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</main>
            </div>
    </section>
</main>
<?php
   include 'footer.php';
?>
</body>
</html>
