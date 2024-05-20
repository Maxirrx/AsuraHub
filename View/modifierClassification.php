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
        <h2>Modifier ou Supprimer une classification</h2>
        <form action="../View/modifierClassification.php" method="post">
            <?php
            $classdao = new ClassificationDAO($bdd);
            $class = $classdao->getAllClassifications();
            ?>

            <select name="classOC">
                <?php foreach ($class as $classif): ?>
                    <option value="<?php echo htmlspecialchars($classif->getClassOC()); ?>">
                        <?php echo htmlspecialchars($classif->getLibclaOC()); ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <br>
            <input type="text" name="classification" placeholder="Nouveau nom de la classification" required>
            <input type="submit" name="modifierclass" value="Modifier Classification">
            <br>
            <br>
            <input type="submit" name="supprimerclass" value="Supprimer Classification">
        </form>
    </div>
</main>

<?php
if (isset($_POST['modifierclass'])) {
    if (!empty($_POST['classOC']) && !empty($_POST['classification'])) {
        $classOC = $_POST['classOC'];
        $libclaOC = $_POST['classification'];
        $classifObj = new Classification($classOC, $libclaOC);

        $classdao = new ClassificationDAO($bdd);
        $classdao->updateClassification($classifObj);
    }
}

if (isset($_POST['supprimerclass'])) {
    if (!empty($_POST['classOC'])) {
        $classOC = $_POST['classOC'];

        $classdao = new ClassificationDAO($bdd);
        $classdao->deleteClassification($classOC);
    }
}
include 'footer.php';
?>



</script>
</body>
</html>