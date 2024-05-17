<?php
require_once '../../BO/OeuvreCinematographique.php';
require_once '../../BDDManager.php';
require_once '../OeuvreCinematographiqueDAO.php';
require_once '../../BO/Genre.php';
require_once '../../BO/Acteur.php';
require_once '../../BO/Realisateur.php';

$bdd = initialiseConnexionBDD();

        $oeuvre = new OeuvreCinematographiqueDAO($bdd);
////////////test oeuvre
///
        $affichageacceuil = $oeuvre->affichageacceuil();
        var_dump($affichageacceuil);

?>