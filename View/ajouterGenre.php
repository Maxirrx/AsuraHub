<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ajouter un Genre</title>
</head>
<body>
<?php
include 'header.php';
include '../Controler/Controler.php';
?>

<main>
    <div class="add-work-container">
        <h2>Ajouter un Genre</h2>
        <form action="../View/ajouterGenre.php" method="post">
            <input type="text" name="nomgenre" placeholder="Nom du genre a créer" required>
            <br>
            <input type="submit" name="ajoutgenre" value="Ajouter Genre">
        </form>
    </div>
</main>

<?php
include 'footer.php';
?>
</body>
</html>