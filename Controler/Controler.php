<?php

require_once '../Model/BDDManager.php';
require_once '../Model/DAO/GenreDAO.php';
require_once '../Model/BO/Genre.php';
require_once '../View/ajouterGenre.php';

$bdd = initialiseConnexionBDD();


if(isset($_POST['ajoutgenre'])) {
    if ($_POST['nomgenre'] != null)
        $genre = $_POST['nomgenre'];
    $genreDAO = new GenreDAO($bdd);

    $ajoutgenre = $genreDAO->addGenre($genre);

}

?>