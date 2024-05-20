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
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/ClassificationDAO.php';
require_once '../Model/BO/Classification.php';

$bdd = initialiseConnexionBDD();

?>

<main>
    <div class="edit-work-container">
        <h2>Ajouter une classification</h2>
        <form action="../View/ajouterClassification.php" method="post">
            <br>
            <input type="text" name="classification" placeholder="Nom de la classification" required>

            <input type="submit" name="ajoutlassification" value="Ajouter Genre">
</main>

<?php
if(isset($_POST['ajoutlassification'])) {
    if ($_POST['classification'] != null)
        $classification = $_POST['classification'];
    $classificationDAO = new ClassificationDAO($bdd);

    $ajoutclass = $classificationDAO->addClassification($classification);

}
include 'footer.php';
?>

</script>
</body>
</html>