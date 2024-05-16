<?php

require_once 'Gestionnaire.php'; // Inclure la classe Gestionnaire

class GestionnaireDAO {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addGestionnaire(Gestionnaire $gestionnaire): void {
        $sql = "INSERT INTO Gestionnaire (codeGest, nomGest, prenomGest, mdpGest) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $gestionnaire->getCodeGest(),
            $gestionnaire->getNomGest(),
            $gestionnaire->getPrenomGest(),
            $gestionnaire->getMdpGest()
        ]);
    }

    public function getGestionnaire(int $codeGest): ?Gestionnaire {
        $sql = "SELECT * FROM Gestionnaire WHERE codeGest = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeGest]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Gestionnaire(
            $row['codeGest'],
            $row['nomGest'],
            $row['prenomGest'],
            $row['mdpGest']
        );
    }

    public function updateGestionnaire(Gestionnaire $gestionnaire): void {
        $sql = "UPDATE Gestionnaire SET nomGest = ?, prenomGest = ?, mdpGest = ? WHERE codeGest = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $gestionnaire->getNomGest(),
            $gestionnaire->getPrenomGest(),
            $gestionnaire->getMdpGest(),
            $gestionnaire->getCodeGest()
        ]);
    }

    public function deleteGestionnaire(int $codeGest): void {
        $sql = "DELETE FROM Gestionnaire WHERE codeGest = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeGest]);
    }

    public function getAllGestionnaires(): array {
        $sql = "SELECT * FROM Gestionnaire";
        $resultat = $this->db->query($sql);
        $gestionnairesData = $resultat->fetchAll(PDO::FETCH_ASSOC);

        $gestionnaires = [];
        foreach ($gestionnairesData as $row) {
            $gestionnaires[] = new Gestionnaire(
                $row['codeGest'],
                $row['nomGest'],
                $row['prenomGest'],
                $row['mdpGest']
            );
        }

        return $gestionnaires;
    }
}
