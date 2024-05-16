<?php

require_once ('../BO/Acteur.php'); // Inclure la classe Acteur

class ActeurDAO {

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function addActeur(Acteur $acteur): void
    {
        $sql = "INSERT INTO Acteur (codeAct, nomAct, preAct, natAct, datnaissAct) VALUES (?, ?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $acteur->getCodeAct(),
            $acteur->getNomAct(),
            $acteur->getPreAct(),
            $acteur->getNatAct(),
            $acteur->getDatnaissAct()->format('Y-m-d')
        ]);
    }

    public function getActeur(string $codeAct): ?Acteur
    {
        $sql = "SELECT * FROM Acteur WHERE codeAct = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeAct]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Acteur(
            $row['codeAct'],
            $row['nomAct'],
            $row['preAct'],
            $row['natAct'],
            new DateTime($row['datnaissAct'])
        );
    }

    public function updateActeur(Acteur $acteur): void
    {
        $sql = "UPDATE Acteur SET nomAct = ?, preAct = ?, natAct = ?, datnaissAct = ? WHERE codeAct = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $acteur->getNomAct(),
            $acteur->getPreAct(),
            $acteur->getNatAct(),
            $acteur->getDatnaissAct()->format('Y-m-d'),
            $acteur->getCodeAct()
        ]);
    }

    public function deleteActeur(string $codeAct): void
    {
        $sql = "DELETE FROM Acteur WHERE codeAct = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeAct]);
    }

    public function getAllActeurs(): array
    {
        $sql = "SELECT * FROM Acteur";
        $resultat = $this->db->query($sql);
        $acteursData = $resultat->fetchAll(PDO::FETCH_ASSOC);

        $acteurs = [];
        foreach ($acteursData as $row) {
            $acteurs[] = new Acteur(
                $row['codeAct'],
                $row['nomAct'],
                $row['preAct'],
                $row['natAct'],
                new DateTime($row['datnaissAct'])
            );
        }

        return $acteurs;
    }
}
