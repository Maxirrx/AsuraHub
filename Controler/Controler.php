<?php
///inclusion du DAO nécessaire
include OeuvreCinematographiqueDAO::class;


///connexion a la base///

$url = 'mysql:host=localhost;dbname=asurahub';
$username = 'root';
$pass = '';

try {
    $pdo = new PDO($url, $username, $pass);
} catch (PDOException $e) {
    echo "Pas connecter";
}


///ajout d oeuvre///

if(isset($_POST['ajout'])){
    if(!empty($_POST['titre']) && !empty($_POST['titrefr']) && !empty($_POST['sortie']) && !empty($_POST['resume']) && !empty($_POST['libelle_categorie']) && !empty($_POST['nombre_episodes'])&& !empty($_POST['liste_acteurs'])&& !empty($_POST['nom_realisateur'])){
        $titre = $_POST['titre'];
        $titrefr = $_POST['titrefr'];
        $sortie = $_POST['sortie'];
        $resume = $_POST['resume'];
        $nombre_episodes = $_POST['nombre_episodes'];
        $libelle_categorie = $_POST['libelle_categorie'];
        $genre = $_POST['libelle_genre'] ;

        $requestreal = $pdo->prepare("SELECT codRea FROM realisateur where nomRea,preRea =" ($_POST['nomreal'], $_POST['prereal']));
        $requestreal->execute();
        $reponsereal = $requestreal;
        $realisateur = $reponsereal;

        $requestacteur = $pdo->prepare("SELECT codeAct FROM acteur where nomAct,preAct =" ($_POST['nomAct'], $_POST['preAct']));
        $requestacteur->execute();
        $reponseacteur = $requestacteur;
        $acteur = $reponseacteur;

        $requestoeuvre = $pdo->prepare("SELECT codifOC FROM oeuvrecinematographique where titreOriginal ="($_POST['titre']));
        $requestoeuvre ->execute();
        $reponseoeuvre = $requestoeuvre;
        $oeuvre = $reponseoeuvre;

        $request = $pdo->prepare("INSERT INTO oeuvrecinematographique (titreOriginal, titreFrancais, anneeSortie, resume, nbEpisode, codRea, classOC, codGenre) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");
        $request->execute([$titre, $titrefr, $sortie, $resume, $nombre_episodes,$realisateur, $libelle_categorie, $genre]);

        $requestajoutacteur = $pdo->prepare("insert into jouer (codeAct,codifOC,roleAct) values "($acteur,$oeuvre,1));
        $requestajoutacteur->execute();
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




///modifier oeuvre///
if(isset($_POST['edit'])){

}elseif (isset($_POST['delete'])){
    $requestsup = $pdo->prepare("DELETE FROM oeuvrecinematographique WHERE titreOriginal ="($_POST['filmmodif']));
}