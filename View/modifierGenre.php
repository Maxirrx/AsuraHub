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

            <select name="genre">
                <?php foreach ($genres as $genre): ?>
                    <option value="<?php echo ($genre->getCodGenre()); ?>">
                        <?php echo ($genre->getLibgOC()); ?>
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
    if (!empty($_POST['genre_id']) && !empty($_POST['nouveaunomgenre'])) {
        $genreId = $_POST['genre_id'];
        $nouveauNom = $_POST['nouveaunomgenre'];

        $genreDAO = new GenreDAO($bdd);
        $genreDAO->updateGenre($genreId, $nouveauNom);
    }
}

if (isset($_POST['supprimergenre'])) {
    if (!empty($_POST['genre_id'])) {
        $genreId = $_POST['genre_id'];

        $genreDAO = new GenreDAO($bdd);
        $genreDAO->deleteGenre($genreId);
    }
}
include 'footer.php';
?>

</script>
</body>
</html>