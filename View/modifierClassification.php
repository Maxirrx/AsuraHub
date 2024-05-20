<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Modifier ou Supprimer une classification</title>
</head>
<body>
<?php
include 'header.php';
?>

<main>
    <div class="edit-work-container">
        <h2>Modifier ou Supprimer une classification</h2>
        <form action="../View/modifierGenre.php" method="post">
            <select name="genremodif" size="1">
                <?php foreach ($nomgenre as $oeuvremodifiable): ?>
                    <option value="<?php echo $oeuvremodifiable['codifOC']; ?>"><?php echo $oeuvremodifiable['titreOriginal']; ?></option>
                <?php endforeach; ?>
            </select>

            <br>
            <input type="text" name="classification" placeholder="Nouveau nom de la classification" required>

</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>