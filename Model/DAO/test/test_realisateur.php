<?php
require_once '../../BDDManager.php';
require_once '../RealisateurDAO.php';
require_once '../../BO/Realisateur.php';
require_once '../../BO/Realisateurajoutable.php';

$bdd = initialiseConnexionBDD();
///////////test Realisateur
///
        $realisateur = new RealisateurDAO($bdd);

///////////test getALL
///
        $affichertout = $realisateur->getAllRealisateurs();
        var_dump($affichertout);

///////////test ajouter
///
        $objreal = new Realisateurajoutable('Neville', 'Yann', 'Breton',1);
        try {
            $realisateur->addRealisateur($objreal);
            echo 'ca marche';
        }catch (Exception $exception){
            echo 'marche pas';
        }
        var_dump($realisateur);
///////test by id
///
        $afficherun = $realisateur->getRealisateur(1);
        var_dump($afficherun);

?>