<?php
    include './data/data.php';
    include '../Controler/Controler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Animes</title>
</head>
<body>
<?php
    include 'header.php';
?>
    <main>
        <section class="films">
            <h2>Animes</h2>
            <?php foreach ($animes as $anime) : ?>
           <div class="film-card">
                <h3><?= $anime['title'] ?></h3>
                <img class="film-poster" alt="html image example" src=<?= $anime['poster'] ?> />
                <p><?= $anime['content'] ?></p>
                <p><?= $anime['yearOfRelease'] ?></p>
                <p><?= $anime['numbersOfEpisodes'] ?></p>
            </div>
            <?php endforeach ?> 
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>