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
            <br>
            <input type="text" name="classification" placeholder="Nom de la classification" required>

            <input type="submit" name="ajoutgenre" value="Ajouter Genre">
</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>