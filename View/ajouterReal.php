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
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/RealisateurDAO.php';
require_once '../Model/BO/Realisateur.php';
require_once '../Model/BO/Realisateurajoutable.php';

$bdd = initialiseConnexionBDD();
?>

<main>
    <div class="edit-work-container">
        <h2>Ajouter Realisateur</h2>
        <form action="../View/ajouterReal.php" method="post">
            <br>
            <input type="text" name="nomreal" placeholder="Nom du Real " required>
            <input type="text" name="prenomreal" placeholder="Prenom du Real" required>
            <input type="text" name="nationalitereal" placeholder="Nationalité du real" required>
            <input type="submit" name="ajoutereal" value="Ajouter Realisateur">

        </form>
</main>

<?php
if (isset($_POST['ajoutereal'])) {
    if (!empty($_POST['nomreal']) && !empty($_POST['prenomreal']) && !empty($_POST['nationalitereal'])) {
        $nomReal = $_POST['nomreal'];
        $prenomReal = $_POST['prenomreal'];
        $nationalitereal = $_POST['nationalitereal'];
        $recompense = 1;
        $realisateurdao = new RealisateurDAO($bdd);
        $realisateurajoute = new realisateurajoutable($nomReal, $prenomReal, $nationalitereal, $recompense);
    }
}
include 'footer.php';
?>



</script>
</body>
</html>