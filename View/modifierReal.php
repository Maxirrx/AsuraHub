<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ajouter acteur</title>
</head>
<body>
<?php
include 'header.php';
?>

<main>
    <div class="edit-work-container">
        <h2>Modifier Realisateur</h2>
        <form action="../View/modifierGenre.php" method="post">
            <br>
            <input type="text" name="nomreal" placeholder="Nouveau nom du realisateur" required>
            <input type="text" name="prenomreal" placeholder="Nouveau nom du realisateur" required>
            <input type="text" name="nationalitreal" placeholder="Nouveau nom du realisateur" required>
            <br>
            <h4>A obtenu une récompense</h4>

            <input type="checkbox" name="recompense"  required>
            <br>
            <br>
            <br>

            <input type="submit" name="ajoutgenre" value="Ajouter Genre">
</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>