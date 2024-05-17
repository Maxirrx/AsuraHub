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
    <title>Acceuil</title>
</head>
<body>
<?php
    include 'header.php';
?>
    <main>
<header>
    <h1>Liste des films</h1>
</header>
<table>
    <?php


    $bdd = initialiseConnexionBDD();

    $oeuvre = new OeuvreCinematographiqueDAO($bdd);
    ////////////test oeuvre
    ///

    $affichageacceuil = [];
    $donnees = $oeuvre->affichageacceuil();


    ?>
        </tbody>
        </table>

    </main>
    <?php
    include 'footer.php';
    ?>
</body>
</html>