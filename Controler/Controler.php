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
    if(!empty($_POST['titre']) && !empty($_POST['titrefr']) && !empty($_POST['sortie']) && !empty($_POST['resume']) && !empty($_POST['libelle_categorie']) && !empty($_POST['nombre_episodes'])&& !empty($_POST['libelle_genre']) && !empty($_POST['nom_acteur']) && !empty($_POST['nom_realisateur'])){

        ///on recupere les informations du formulaire de l oeuvre et on evite les injectons de code dans ces derniers grace au specialchars et mettre les intval pour mettre les select en entier
        $titre = htmlspecialchars($_POST['titre']);
        $titrefr = htmlspecialchars($_POST['titrefr']);
        $sortie = intval($_POST['sortie']);
        $resume = htmlspecialchars($_POST['resume']);
        $nombre_episodes = intval($_POST['nombre_episodes']);
        $libelle_categorie = intval($_POST['libelle_categorie']);
        $genre = intval($_POST['libelle_genre']);
        $acteur = intval($_POST['nom_acteur']);
        $realisateur = intval($_POST['nom_realisateur']);

        ///insert l oeuvre
        $request = $pdo->prepare("INSERT INTO oeuvrecinematographique (titreOriginal, titreFrancais, anneeSortie, resume, nbEpisode, codRea, classOC, codGenre) VALUES ( ?, ?, ?, ?, ?, ?, ?, ?)");

        $request->execute([$titre, $titrefr, $sortie, $resume, $nombre_episodes,$realisateur , $libelle_categorie, $genre]);

        ///trouve le code de l oeuvre
        $requestoeuvre = $pdo->prepare("SELECT codifOC FROM oeuvrecinematographique where titreOriginal = (?)");
        $requestoeuvre ->execute([$titre]);
        $reponseoeuvre = $requestoeuvre->fetchColumn();
        $reponseoeuvreentier = intval($reponseoeuvre);

        ///relie l oeuvre a l acteur
        $requestajoutacteur = $pdo->prepare("insert into jouer (codeAct,codifOC,roleAct) values (?,?,?)");
        $requestajoutacteur->execute([$acteur,$reponseoeuvreentier,1]);

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


        ///menu deroulant acteur///
        $requestnomoeuvre = $pdo->prepare("SELECT codifOC,titreOriginal FROM oeuvrecinematographique");
        $requestnomoeuvre->execute();
        $nomoeuvre = $requestnomoeuvre->fetchAll();
        $tableau5[] = $nomoeuvre;


      ///  ///modifier oeuvre///
      ///  if(isset($_POST['edit'])){
      ///      if (!empty($_POST['titre']) && !empty($_POST['titrefr']) && !empty($_POST['sortie']) && !empty($_POST['resume']) && !empty($_POST['libelle_categorie']) && !empty($_POST['nombre_episodes']) && !empty($_POST['libelle_genre']) && !empty($_POST['nom_acteur']) && !empty($_POST['nom_realisateur'])) {

       ///  $titre = htmlspecialchars($_POST['titre']);
       ///  $titrefr = htmlspecialchars($_POST['titrefr']);
       ///  $sortie = intval($_POST['sortie']);
       ///  $resume = htmlspecialchars($_POST['resume']);
       ///  $nombre_episodes = intval($_POST['nombre_episodes']);
       ///  $libelle_categorie = intval($_POST['libelle_categorie']);
       ///  $genre = intval($_POST['libelle_genre']);
       ///  $acteur = intval($_POST['nom_acteur']);
       ///  $realisateur = intval($_POST['nom_realisateur']);




      ///      }
      ///  }elseif (isset($_POST['delete'])){
      ///      $oeuvremodif = intval($_POST['filmmodif']);
      ///      $requestfind = $pdo->prepare("SELECT codifOC FROM Jouer WHERE codifOC =(?)");
      ///      $requestfind->execute([$oeuvremodif]);
      ///      $contenue = $requestfind->fetchAll();
      ///      var_dump($contenue);
      ///      if($contenue != null) {
      ///          $requestsup = $pdo->prepare("DELETE FROM oeuvrecinematographique WHERE codifOC = (?)");
      ///          $requestsup->execute([$oeuvremodif]);
      ///          var_dump($oeuvremodif);
      ///      }else{
      ///          echo "peut pas";
      ///       }
      /// }