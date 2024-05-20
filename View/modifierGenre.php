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
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/GenreDAO.php';
require_once '../Model/BO/Genre.php';

$bdd = initialiseConnexionBDD();
?>

<main>
    <div class="edit-work-container">
        <h2>Modifier ou Supprimer un genre</h2>
        <form action="../View/modifierGenre.php" method="post">
            <?php
            $genreDAO = new GenreDAO($bdd);
            $genres = $genreDAO->getAllGenres();
            ?>

            <select name="codGenre">
                <?php foreach ($genres as $genre): ?>
                    <option value="<?php echo htmlspecialchars($genre->getCodGenre()); ?>">
                        <?php echo htmlspecialchars($genre->getLibgOC()); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br>
            <input type="text" name="nouveaunomgenre" placeholder="Nouveau nom genre" required>
            <input type="submit" name="modifiergenre" value="Modifier Genre">
            <br>
            <br>
            <input type="submit" name="supprimergenre" value="Supprimer Genre">
        </form>
</main>

<?php
if (isset($_POST['modifiergenre'])) {
    if (!empty($_POST['codGenre']) && !empty($_POST['nouveaunomgenre'])) {
        $codGenre = $_POST['codGenre'];
        $libOC = $_POST['nouveaunomgenre'];
        $genreobj = new Genre($codGenre, $libOC);

        $genreDAO = new GenreDAO($bdd);
        $genreDAO->updateGenre($genreobj);
    }
}

if (isset($_POST['supprimergenre'])) {
    if (!empty($_POST['codGenre'])) {
        $codGenre = $_POST['codGenre'];

        $genreDAO = new GenreDAO($bdd);
        $genreDAO->deleteGenre($codGenre);
    }
}
include 'footer.php';
?>


</script>
</body>
</html>