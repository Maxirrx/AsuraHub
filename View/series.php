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
    <title>Series</title>
</head>
<body>
<?php
    include 'header.php';
?>
    <main>
        <section class="films">
            <h2>Series</h2>
            <?php foreach ($series as $serie) : ?>
           <div class="film-card">
                <h3><?= $serie['title'] ?></h3>
                <img class="film-poster" alt="html image example" src=<?= $serie['poster'] ?> />
                <p><?= $serie['content'] ?></p>
                <p><?= $serie['yearOfRelease'] ?></p>
                <p><?= $serie['numbersOfEpisodes'] ?></p>
            </div>
            <?php endforeach ?> 
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>