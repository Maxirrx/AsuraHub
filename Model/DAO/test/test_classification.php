<?php
require_once ('../../BDDManager.php');
require_once '../ClassificationDAO.php';
require_once '../../BO/Classification.php';

$bdd= initialiseConnexionBDD();

//////////////test classification
///
        $classificationDAO=new classificationDAO($bdd);
//////////test getALL
        $regarder = $classificationDAO->getAllClassifications();
        var_dump($regarder);
///
/////////////test supprimer
//        $suppression = $classificationDAO->deleteClassification(2);
//        var_dump($suppression);

///////////test modifier
        $classmodif = new Classification(1,"Documentaire");
        try {
            $modifier = $classificationDAO->updateClassification($classmodif);
            var_dump($modifier);
            echo 'ca marche';
        }catch (Exception $e){
            echo $e->getMessage();
        }

/////////////ajouter class
        $nomclass = 'Film';
        try {
            $ajouter = $classificationDAO->addClassification($nomclass);
            var_dump($ajouter);
            echo 'ca marche';
        }catch (Exception $e){
            echo $e->getMessage();
        }


///////////////get by id
        $regarder = $classificationDAO->getClassification(3);
        var_dump($regarder);

?>