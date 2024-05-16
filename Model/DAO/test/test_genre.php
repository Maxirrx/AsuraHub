<?php
require_once ('../../BDDManager.php');
require_once ('../GenreDAO.php');
require_once ('../../BO/Genre.php');

$bdd= initialiseConnexionBDD();

///////////////test genre
///
        $genre1 = new GenreDAO($bdd);
///////////test getALL
        $regarder =  $genre1->getAllGenres();
        var_dump($regarder);
///
//////////////test supprimer
        $supprimer = $genre1->deleteGenre(1);
        var_dump($supprimer);



/////////////test modifier
        $genremodif = new Genre(11,"riz-poulet");
        try {
                $modifier =  $genre1->updateGenre($genremodif);
                var_dump($modifier);
                echo 'ca marche l update';
        }catch (Exception $e){
                echo $e->getMessage();
        }





////////////ajouter genre
        $libgOC = "saucisson";
        try {
                $genre1 ->addGenre($libgOC);
                echo "ca marche";
        }catch (Exception $e){
                echo $e->getMessage();
        }


/////////// get genre by id
        $getgenre = $genre1->getGenre('1');
        var_dump($getgenre);


?>
