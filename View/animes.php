<?php
require_once '../Model/BO/OeuvreCinematographique.php';
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/OeuvreCinematographiqueDAO.php';
require_once '../Model/BO/Genre.php';
require_once '../Model/BO/Acteur.php';
require_once '../Model/BO/Realisateur.php';
require_once '../Model/BO/Filmacceuil.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Animes</title>
</head>
<body>
<?php
    include 'header.php';
?>
    <main>
        <section class="films">
            <h2>Animes</h2>
            <?php


            $bdd = initialiseConnexionBDD();

            $oeuvre = new OeuvreCinematographiqueDAO($bdd);
            ////////////test oeuvre
            ///

            $donnees = $oeuvre->affichagesanime();


            ?>
        </section>
    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>