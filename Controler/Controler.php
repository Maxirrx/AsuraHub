<?php
require_once '../Model/BO/OeuvreCinematographique.php';
require_once '../Model/BDDManager.php';
require_once '../Model/DAO/OeuvreCinematographiqueDAO.php';
require_once '../Model/BO/Genre.php';
require_once '../Model/BO/Acteur.php';
require_once '../Model/BO/Realisateur.php';
require_once '../Model/BO/Filmacceuil.php';

$bdd = initialiseConnexionBDD();

$oeuvre = new OeuvreCinematographiqueDAO($bdd);
////////////test oeuvre
///

$affichageacceuil = [];
$donnees = $oeuvre->affichageacceuil();


?>