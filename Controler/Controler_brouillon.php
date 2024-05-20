<?php
require_once '../Model/BDDManager.php';
$pdo = initialiseConnexionBDD();

// Ajout d'oeuvre
if (isset($_POST['ajout'])) {
    if (!empty($_POST['titre']) && !empty($_POST['titrefr']) && !empty($_POST['sortie']) && !empty($_POST['resume']) && !empty($_POST['libelle_categorie']) && !empty($_POST['nombre_episodes']) && !empty($_POST['liste_acteurs']) && !empty($_POST['nom_realisateur'])) {
        $titre = $_POST['titre'];
        $titrefr = $_POST['titrefr'];
        $sortie = $_POST['sortie'];
        $resume = $_POST['resume'];
        $nombre_episodes = $_POST['nombre_episodes'];
        $libelle_categorie = $_POST['libelle_categorie'];
        $genre = $_POST['libelle_genre'];
        $nomreal = $_POST['nomreal'];
        $prereal = $_POST['prereal'];
        $nomAct = $_POST['nomAct'];
        $preAct = $_POST['preAct'];

        // Recherche du réalisateur
        $requestreal = $pdo->prepare("SELECT codRea FROM realisateur WHERE nomRea = ? AND preRea = ?");
        $requestreal->execute([$nomreal, $prereal]);
        $reponsereal = $requestreal->fetch(PDO::FETCH_ASSOC);
        $realisateur = $reponsereal ? $reponsereal['codRea'] : null;

        // Recherche de l'acteur
        $requestacteur = $pdo->prepare("SELECT codeAct FROM acteur WHERE nomAct = ? AND preAct = ?");
        $requestacteur->execute([$nomAct, $preAct]);
        $reponseacteur = $requestacteur->fetch(PDO::FETCH_ASSOC);
        $acteur = $reponseacteur ? $reponseacteur['codeAct'] : null;

        // Recherche de l'oeuvre
        $requestoeuvre = $pdo->prepare("SELECT codifOC FROM oeuvrecinematographique WHERE titreOriginal = ?");
        $requestoeuvre->execute([$titre]);
        $reponseoeuvre = $requestoeuvre->fetch(PDO::FETCH_ASSOC);
        $oeuvre = $reponseoeuvre ? $reponseoeuvre['codifOC'] : null;

        // Insertion de l'oeuvre
        $request = $pdo->prepare("INSERT INTO oeuvrecinematographique (titreOriginal, titreFrancais, anneeSortie, resume, nbEpisode, codRea, classOC, codGenre) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $request->execute([$titre, $titrefr, $sortie, $resume, $nombre_episodes, $realisateur, $libelle_categorie, $genre]);

        // Insertion de l'acteur dans jouer
        $requestajoutacteur = $pdo->prepare("INSERT INTO jouer (codeAct, codifOC, roleAct) VALUES (?, ?, ?)");
        $requestajoutacteur->execute([$acteur, $oeuvre, 1]);
    }
}

///menu deroulant cartegorie///
        $requestcategorie = $pdo->prepare("SELECT classOC, libclaOC FROM Classification");
        $requestcategorie->execute();
        $data = $requestcategorie->fetchAll();
        $tableau[] = $data;




///menu deroulant genre///
$requestcategorie = $pdo->prepare("SELECT codGenre, libgOC FROM Genre");
$requestcategorie->execute();
$data2 = $requestcategorie->fetchAll();
$tableau2[] = $data2;



///menu deroulant realisateur///
$requestcategorie = $pdo->prepare("SELECT codeAct, nomAct, preAct FROM Acteur");
$requestcategorie->execute();
$data3 = $requestcategorie->fetchAll();
$tableau3[] = $data3;



///menu deroulant acteur///
$requestcategorie = $pdo->prepare("SELECT codRea, nomRea, prenomRea FROM Realisateur");
$requestcategorie->execute();
$data4 = $requestcategorie->fetchAll();
$tableau4[] = $data4;



