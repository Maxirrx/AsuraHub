<?php
$title = 'helloworld';
include './data/data.php';
include '../Controler/Controler.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Films</title>
</head>
<body>
<?php
include 'header.php';
?>
<main>
    <section class="films">
        <h2>Films</h2>
        <?php foreach ($films as $film) : ?>
            <div class="film-card">
                <h3><?= $film['title'] ?></h3>
                <a href="film?title=<?= $film['id'] ?>">
                    <img class="film-poster" alt="<?= $film['title'] ?>" src="<?= $film['poster'] ?>" />
            </div>
        <?php endforeach ?>
    </section>
</main>
<?php
include 'footer.php';
?>
</body>
</html>