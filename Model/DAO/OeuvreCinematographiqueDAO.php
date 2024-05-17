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

    public function getOeuvreCinematographique(int $codifOC): ?OeuvreCinematographique {
        $sql = "SELECT * FROM OeuvreCinematographique WHERE codifOC = ?";
        $stmt = $this->bdd->prepare($sql);
        $stmt->execute([$codifOC]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new OeuvreCinematographique(
            $row['codifOC'],
            $row['titreOriginal'],
            $row['titreFrancais'],
            $row['anneeSortie'],
            $row['resume'],
            $row['nbEpisode'],
            new Genre($row['codGenre']), // Assuming Genre constructor takes a code
            new Classification($row['classOC']), // Assuming Classification constructor takes a code
            new Realisateur($row['codRea']) // Assuming Realisateur constructor takes a code
        );
    }
    public  function affichageacceuil(){
            $sql= "SELECT codifOC, titreOriginal FROM OeuvreCinematographique ";
            $resultat = $this->bdd->query($sql);
            $resultat->fetchAll(\PDO::FETCH_ASSOC);

            foreach ($resultat as $acceuil){
                $filmacceuil[] = new Filmacceuil(
                    $acceuil['codifOC'],
                    $acceuil['libgOC']
                );
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
