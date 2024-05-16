<?php
require_once ('../../BDDManager.php');;
require_once ('../GenreDAO.php');
require_once ('../../BO/Genre.php');

$bdd= initialiseConnexionBDD();

///test genre
///

//      $trouveroeuvre = $oeuvre->getAllOeuvresCinematographiques();
//      var_dump($trouveroeuvre);

        $genre1 = new GenreDAO($bdd);

///     $regarder =  $genre1->getAllGenres();
///     var_dump($regarder);
///
///
///     $supprimer = $genre1->deleteGenre(1);
///     var_dump($supprimer);
///
///
///     $modifier =  $genre1->updateGenre();
///     var_dump($modifier)

        $genreobject = new Genre(1,'rigolo');
///     $creer = $genre1->addGenre($genreobject);

///     var_dump($creer);
        var_dump($genreobject);

        $getgenre = $genre1->getGenre('1');
        var_dump($getgenre);
?>
