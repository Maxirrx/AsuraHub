<?php
require_once ('../../BDDManager.php');
require_once('../JouerDAO.php');
require_once('../../BO/Jouer.php');

$bdd= initialiseConnexionBDD();

////////////test jouer
///
        $jouer = new JouerDAO($bdd);
///////////test getALL
        $regarder = $jouer->getAllJouer();
        var_dump($regarder);

?>