<?php

require_once '../Model/BDDManager.php';
require_once '../Model/DAO/GenreDAO.php';
require_once '../Model/BO/Genre.php';
require_once '../View/modifierGenre.php';
$bdd = initialiseConnexionBDD();


if(isset($_POST['modifiergenre'])) {
    if ($_POST['nomgenre'] != null){
        $genre = $_POST['nomgenre'];
    }
}


?>