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
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/GenreDAO.php';
require_once '../Model/BO/Genre.php';

$bdd = initialiseConnexionBDD();

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
if(isset($_POST['ajoutgenre'])) {
    if ($_POST['nomgenre'] != null)
        $genre = $_POST['nomgenre'];
    $genreDAO = new GenreDAO($bdd);

    $ajoutgenre = $genreDAO->addGenre($genre);

}
include 'footer.php';
?>
</body>
</html>