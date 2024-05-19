<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Modifier ou supprimer une œuvre</title>
</head>
<body>
<?php
include 'header.php';
include '../Controler/Controler.php';
?>

<main>
    <div class="edit-work-container">
        <h2>Modifier ou Supprimer un genre</h2>
        <form action="../View/modifierGenre.php" method="post">
            <select name="genremodif" size="1">
                <?php foreach ($nomgenre as $oeuvremodifiable): ?>
                    <option value="<?php echo $oeuvremodifiable['codifOC']; ?>"><?php echo $oeuvremodifiable['titreOriginal']; ?></option>
                <?php endforeach; ?>
            </select>

            <br>
            <input type="text" name="nomgenrem" placeholder="Nouveau nom de genre" required>

</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>