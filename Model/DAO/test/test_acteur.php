<?php
require_once('../../BDDManager.php');
require_once('../ActeurDAO.php');
require_once('../../BO/Acteur.php');

$bdd= initialiseConnexionBDD();


//////////////test ecteur
///
        $acteur = new ActeurDAO($bdd);
///////////test getALL
        $afficheracteur = $acteur->getAllActeurs();
        var_dump($afficheracteur);
///
/////////////////test supprimer
        $supprimeracteur = $acteur->deleteActeur(1);
        var_dump($supprimeracteur);

////////////////test modifier
        $acteurmodifiable = new Acteur(2,'Kevin','Roux','Francais','1973.08.12');
        try {
            $modifieracteur = $acteur->updateActeur();
            echo 'ca marche';
        }catch (Exception $e){
            echo $e->getMessage();
        }

//////////////ajout acteur
        $Acteurajoutable = new Acteurajoutable('Maxime','Roux','Francais','2005.03.23');
        try {
            $acteur->addActeur($Acteurajoutable);
            echo 'ca fonctionne bien';
        }catch (Exception $e){
            echo $e->getMessage();
        }

///////////get genre by id
        $getacteur = $acteur->getActeur(8);
        var_dump($getacteur);
?>