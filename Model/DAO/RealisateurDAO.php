<?php

require_once 'Realisateur.php'; // Inclure la classe Realisateur

class RealisateurDAO {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addRealisateur(Realisateur $realisateur): void {
        $sql = "INSERT INTO Realisateur (codRea, nomRea, prenomRea, natRea, recompenseRealisateur) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $realisateur->getCodRea(),
            $realisateur->getNomRea(),
            $realisateur->getPrenomRea(),
            $realisateur->getNatRea(),
            $realisateur->isRecompenseRealisateur()
        ]);
    }

    public function getRealisateur(string $codRea): ?Realisateur {
        $sql = "SELECT * FROM Realisateur WHERE codRea = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codRea]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Realisateur(
            $row['codRea'],
            $row['nomRea'],
            $row['prenomRea'],
            $row['natRea'],
            (bool) $row['recompenseRealisateur']
        );
    }

    public function updateRealisateur(Realisateur $realisateur): void {
        $sql = "UPDATE Realisateur SET nomRea = ?, prenomRea = ?, natRea = ?, recompenseRealisateur = ? WHERE codRea = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $realisateur->getNomRea(),
            $realisateur->getPrenomRea(),
            $realisateur->getNatRea(),
            $realisateur->isRecompenseRealisateur(),
            $realisateur->getCodRea()
        ]);
    }

    public function deleteRealisateur(string $codRea): void {
        $sql = "DELETE FROM Realisateur WHERE codRea = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codRea]);
    }

    public function getAllRealisateurs(): array {
        $sql = "SELECT * FROM Realisateur";
        $resultat = $this->db->query($sql);
        $realisateursData = $resultat->fetchAll(PDO::FETCH_ASSOC);

        $realisateurs = [];
        foreach ($realisateursData as $row) {
            $realisateurs[] = new Realisateur(
                $row['codRea'],
                $row['nomRea'],
                $row['prenomRea'],
                $row['natRea'],
                (bool) $row['recompenseRealisateur']
            );
        }

        return $realisateurs;
    }
}
