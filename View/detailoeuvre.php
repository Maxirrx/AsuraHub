<?php
require_once '../Model/BO/OeuvreCinematographique.php';
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/OeuvreCinematographiqueDAO.php';
require_once '../Model/BO/Genre.php';
require_once '../Model/BO/Acteur.php';
require_once '../Model/BO/Realisateur.php';
require_once '../Model/BO/Filmacceuil.php';
require_once '../Model/BO/OeuvreCinematographiqueaffichable.php';

$bdd = initialiseConnexionBDD();
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
<?php
$oeuvre = new OeuvreCinematographiqueDAO($bdd);

$infooeure = $oeuvre->getOeuvreCinematographique(11);


$titreOriginal = $infooeure['titreOriginal'];
$titreFrancais = $infooeure['titreFrancais'];
$anneeSortie = $infooeure['anneeSortie'];
$resume = $infooeure['resume'];
$nbEpisode = $infooeure['nbEpisode'];
$genreNom = $infooeure['genreNom'];
$classificationNom = $infooeure['classificationNom'];
$realisateurIdentite = $infooeure['realisateurIdentite'];

?>

<table>
    <tr>
        <th>Titre Original</th>
        <td><?php echo $titreOriginal; ?></td>
    </tr>
    <tr>
        <th>Titre Français</th>
        <td><?php echo $titreFrancais; ?></td>
    </tr>
    <tr>
        <th>Année de Sortie</th>
        <td><?php echo $anneeSortie; ?></td>
    </tr>
    <tr>
        <th>Résumé</th>
        <td><?php echo $resume; ?></td>
    </tr>
    <tr>
        <th>Nombre d'Épisodes</th>
        <td><?php echo $nbEpisode; ?></td>
    </tr>
    <tr>
        <th>Genre</th>
        <td><?php echo $genreNom; ?></td>
    </tr>
    <tr>
        <th>Classification</th>
        <td><?php echo $classificationNom; ?></td>
    </tr>
    <tr>
        <th>Réalisateur</th>
        <td><?php echo $realisateurIdentite; ?></td>
    </tr>
</table>
<?php
include 'footer.php';
?>
</body>
</html>