<?php
function initialiseConnexionBDD() {
    $bdd = null;
    try {
        $bdd = new PDO('mysql:host=db5015827512.hosting-data.io;dbname=dbu1211219;charset=utf8',
            'dbs12904905',
            'AssuraHub&ProjrtPhP1SIO%'
        );
    } catch(Exception $e) {
        die('Erreur connexion BDD : '.$e->getMessage());
    }

    return $bdd;
}