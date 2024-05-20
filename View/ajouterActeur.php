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
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/ActeurDAO.php';
require_once '../Model/BO/Acteur.php';
require_once '../Model/BO/Acteurajoutable.php';

$bdd = initialiseConnexionBDD();

?>

<main>
    <div class="edit-work-container">
        <h2>Ajouter Acteur</h2>
        <form action="../View/ajouterActeur.php" method="post">
            <br>
            <br>
            <input type="text" name="nomacteur" placeholder="Nom de l'acteur" required>
            <br>
            <br>
            <input type="text" name="prenomacteur" placeholder="Prenom de l'acteur" required>
            <br>
            <br>
            <input type="text" name="nationaliteacteur" placeholder="Nationalité de l'acteur" required>
            <h4>Date de naissance</h4>
            <input type="date" name="datedenaiss" required>
            <br>
            <br>
            <input type="submit" name="confirm" required>

        </form>
</main>

<?php
if (isset($_POST['confirm'])) {
    if (!empty($_POST['nomacteur']) && !empty($_POST['prenomacteur']) && !empty($_POST['nationaliteacteur']) && !empty($_POST['datedenaiss'])) {
        $nomacteur = $_POST['nomacteur'];
        $prenomacteur = $_POST['prenomacteur'];
        $nationaliteacteur = $_POST['nationaliteacteur'];
        $datedenaiss = $_POST['datedenaiss'];

        $acteuraajouter = new Acteurajoutable($nomacteur, $prenomacteur, $nationaliteacteur, $datedenaiss);
        $acteurdao = new ActeurDAO($bdd);

        var_dump($acteuraajouter);


        $ajoutacteur = $acteurdao->addActeur($acteuraajouter);
        var_dump($ajoutacteur);
}
}
include 'footer.php';
?>

</script>
</body>
</html>