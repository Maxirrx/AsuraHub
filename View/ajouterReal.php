<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Ajouter Realisateur</title>
</head>
<body>
<?php
include 'header.php';
?>

<main>
    <div class="edit-work-container">
        <h2>Ajouter Realisateur</h2>
        <form action="../View/modifierGenre.php" method="post">
            <br>
            <input type="text" name="nomreal" placeholder="Nom du Real " required>
            <input type="text" name="prenomreal" placeholder="Prenom du Real" required>
            <input type="text" name="nationalitereal" placeholder="Nationalité du real" required>
            <input type="checkbox" name="recompense" placeholder="Nombre de recompense" required>
        </form>
</main>

<?php
include 'footer.php';
?>

</script>
</body>
</html>