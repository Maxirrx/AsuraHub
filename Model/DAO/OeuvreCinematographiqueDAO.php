<?php

class OeuvreCinematographiqueDAO {

    private $bdd;

    public function __construct(\PDO $bdd) {
        $this->bdd = $bdd;
    }

    public function addOeuvreCinematographique(OeuvreCinematographique $oeuvre): void {
        $sql = "INSERT INTO OeuvreCinematographique (codifOC, titreOriginal, titreFrancais, anneeSortie, resume, nbEpisode, codGenre, classOC, codRea) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([
            $oeuvre->getCodifOC(),
            $oeuvre->getTitreOriginal(),
            $oeuvre->getTitreFrancais(),
            $oeuvre->getAnneeSortie(),
            $oeuvre->getResume(),
            $oeuvre->getNbEpisode(),
            $oeuvre->getCodGenre()->getCodeGenre(), // Assuming getCodeGenre() is a method in Genre class
            $oeuvre->getClassOC()->getCodeClass(), // Assuming getCodeClass() is a method in Classification class
            $oeuvre->getCodRea()->getCodeRea() // Assuming getCodeRea() is a method in Realisateur class
        ]);
    }


        public function getOeuvreCinematographique(int $codifOC): ?array {
            $sql = "SELECT * FROM OeuvreCinematographique WHERE codifOC = ?";
            $stmt = $this->bdd->prepare($sql);
            $stmt->execute([$codifOC]);
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
            if (!$row) {
                return null;
            }

            // Récupérer le nom du genre
// Récupérer le nom du genre
            $sql = "SELECT libgOC FROM Genre WHERE codGenre = ?";
            try {
                $stmt = $this->bdd->prepare($sql);
                $stmt->execute([$row['codGenre']]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $genreData = $stmt->fetch(PDO::FETCH_ASSOC);
            $genreNom = $genreData['libgOC'];




            // Récupérer la classification
            $sql = "SELECT libclaOC FROM Classification WHERE classOC = ?";
            try {
                $stmt1 = $this->bdd->prepare($sql);
                $stmt1->execute([$row['classOC']]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $classificationdata = $stmt1->fetch(PDO::FETCH_ASSOC);
            $classificationNom = $classificationdata['libclaOC'];



            // Récupérer le nom  du réalisateur    public function getRealisateur(string $codRea): ?Realisateur {
            $sql = "SELECT nomRea FROM Realisateur WHERE codRea = ?";
            try {
                $stmt1 = $this->bdd->prepare($sql);
                $stmt1->execute([$row['codRea']]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $realisateurdata = $stmt1->fetch(PDO::FETCH_ASSOC);
            $realisateurNom = $realisateurdata['nomRea'];

            ////////recuperer le prenom
            $sql = "SELECT prenomRea FROM Realisateur WHERE codRea = ?";
            try {
                $stmt1 = $this->bdd->prepare($sql);
                $stmt1->execute([$row['codRea']]);
            } catch (Exception $e) {
                echo $e->getMessage();
            }

            $realisateurdata2 = $stmt1->fetch(PDO::FETCH_ASSOC);
            $realisateurprenom = $realisateurdata2['prenomRea'];

            $realisateuridentité = $realisateurprenom . ' ' . $realisateurNom;


            // tableau
            $result = [
                'titreOriginal' => $row['titreOriginal'],
                'titreFrancais' => $row['titreFrancais'],
                'anneeSortie' => $row['anneeSortie'],
                'resume' => $row['resume'],
                'nbEpisode' => $row['nbEpisode'],
                'genreNom' => $genreNom,
                'classificationNom' => $classificationNom,
                'realisateurIdentite' => $realisateuridentité
            ];
            return $result;

        }
    public  function affichageacceuil(){
            $sql= "SELECT codifOC, titreOriginal FROM OeuvreCinematographique ";
        try {
            $resultat = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
            $result = $resultat->fetchAll(\PDO::FETCH_ASSOC);
            $filmacceuil = [];
            foreach ($result as $acceuil){
                $filmacceuil[] = new Filmacceuil(
                    $acceuil['codifOC'],
                    $acceuil['titreOriginal'],
                );
            }
            $liendetail = "detailoeuvre.php";
        foreach ($result as $acceuil) {
            echo "<div class='film-list'>";
            echo "<a href = '$liendetail' class ='film'  >" .$acceuil['titreOriginal'] ." </a href>";
            echo "</div>";
        }
            return $filmacceuil;
    }


    public  function affichagefilm(){
        $sql= "SELECT classOC FROM Classification where libclaOC = 'Film'";
        try {
            $resultatclass = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $classfilm = $resultatclass->fetch(\PDO::FETCH_ASSOC);
        ////transformer en entier
        $classfilmint = intval($classfilm['classOC']);


        $sql= "SELECT codifOC, titreOriginal FROM OeuvreCinematographique where classOC = ". $classfilmint . ";";

        try {
            $resultat = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $result = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        $filmacceuil = [];
        foreach ($result as $acceuil){
            $filmacceuil[] = new Filmacceuil(
                $acceuil['codifOC'],
                $acceuil['titreOriginal'],
            );
        }
        $liendetail = "detailoeuvre.php";
        foreach ($result as $acceuil) {
            echo "<div class='film-list'>";
            echo "<a href = '$liendetail' class ='film'  >" .$acceuil['titreOriginal'] ." </a href>";
            echo "</div>";
        }
        return $filmacceuil;
    }

    public  function affichageserie(){
        $sql= "SELECT classOC FROM Classification where libclaOC = 'Serie'";
        try {
            $resultatserie = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $classserie = $resultatserie->fetch(\PDO::FETCH_ASSOC);
        ////transformer en entier
        $classserieint = intval($classserie['classOC']);



        $sql= "SELECT codifOC, titreOriginal FROM OeuvreCinematographique where classOC = ". $classserieint . ";";

        try {
            $resultat = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $result = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        $filmacceuil = [];
        foreach ($result as $acceuil){
            $filmacceuil[] = new Filmacceuil(
                $acceuil['codifOC'],
                $acceuil['titreOriginal'],
            );
        }
        $liendetail = "detailoeuvre.php";
        foreach ($result as $acceuil) {
            echo "<div class='film-list'>";
            echo "<a href = '$liendetail' class ='film'  >" .$acceuil['titreOriginal'] ." </a href>";
            echo "</div>";
        }
        return $filmacceuil;
    }

    public  function affichagesanime(){
        $sql= "SELECT classOC FROM Classification where libclaOC = 'Anime'";
        try {
            $resultatanime = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $classanime = $resultatanime->fetch(\PDO::FETCH_ASSOC);
        ////transformer en entier
        $classanimeint = intval($classanime['classOC']);



        $sql= "SELECT codifOC, titreOriginal FROM OeuvreCinematographique where classOC = ". $classanimeint . ";";

        try {
            $resultat = $this->bdd->query($sql);
        } catch (PDOException $e) {
            die($e->getMessage());
        }
        $result = $resultat->fetchAll(\PDO::FETCH_ASSOC);
        $filmacceuil = [];
        foreach ($result as $acceuil){
            $filmacceuil[] = new Filmacceuil(
                $acceuil['codifOC'],
                $acceuil['titreOriginal'],
            );
        }
        $liendetail = "detailoeuvre.php";
        foreach ($result as $acceuil) {
            echo "<div class='film-list'>";
            echo "<a href = '$liendetail' class ='film'  >" .$acceuil['titreOriginal'] ." </a href>";
            echo "</div>";
        }
        return $filmacceuil;
    }


    public function updateOeuvreCinematographique(OeuvreCinematographique $oeuvre): void {
        $sql = "UPDATE OeuvreCinematographique SET titreOriginal = ?, titreFrancais = ?, anneeSortie = ?, resume = ?, nbEpisode = ?, codGenre = ?, classOC = ?, codRea = ? WHERE codifOC = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([
            $oeuvre->getTitreOriginal(),
            $oeuvre->getTitreFrancais(),
            $oeuvre->getAnneeSortie(),
            $oeuvre->getResume(),
            $oeuvre->getNbEpisode(),
            $oeuvre->getCodGenre()->getCodeGenre(),
            $oeuvre->getClassOC()->getCodeClass(),
            $oeuvre->getCodRea()->getCodeRea(),
            $oeuvre->getCodifOC()
        ]);
    }

    public function deleteOeuvreCinematographique(int $codifOC): void {
        $sql = "DELETE FROM OeuvreCinematographique WHERE codifOC = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$codifOC]);
    }

    public function getAllOeuvresCinematographiques() {
        $sql = ("SELECT * FROM OeuvreCinematographique");
        $resultat = $this->bdd->query($sql);
        $oeuvresData = $resultat->fetchAll(\PDO::FETCH_ASSOC);

        $oeuvres = [];
        foreach ($oeuvresData as $row) {
            $oeuvres[] = new OeuvreCinematographique(
                $row['codifOC'],
                $row['titreOriginal'],
                $row['titreFrancais'],
                $row['anneeSortie'],
                $row['resume'],
                $row['nbEpisode'],
                new Genre($row['codGenre']),
                new Classification($row['classOC']),
                new Realisateur($row['codRea'])
            );
        }

        return $oeuvres;
    }
}
