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
        <h2>Ajouter Acteur</h2>
        <form>
            <?php foreach ($nomgenre as $oeuvremodifiable): ?>
                <option value="<?php echo $oeuvremodifiable['codifOC']; ?>"><?php echo $oeuvremodifiable['titreOriginal']; ?></option>
            <?php endforeach; ?>
            <br>
            <input type="submit" name="ajoutgenre" value="Ajouter Genre">
        </form>
        <form action="../View/modifierGenre.php" method="post">
            <br>
            <input type="text" name="nomacteur" placeholder="Nouveau nom de genre" required>
            <input type="text" name="prenomacteur" placeholder="Nouveau nom de genre" required>
            <input type="text" name="nationaliteacteur" placeholder="Nouveau nom de genre" required>
            <input type="date" name="datedenaiss" placeholder="Nouveau nom de genre" required>
            <br>
            <input type="submit" name="ajoutgenre" value="Ajouter Genre">
</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>