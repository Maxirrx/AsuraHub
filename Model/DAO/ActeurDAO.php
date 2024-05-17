<?php


class ActeurDAO {

    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }

    public function addActeur(Acteurajoutable $acteurajoutable): void
    {
        $sql = "INSERT INTO Acteur (nomAct, preAct, natAct, datnaissAct) VALUES (?, ?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $acteurajoutable->getNomAct(),
            $acteurajoutable->getPreAct(),
            $acteurajoutable->getNatAct(),
            $acteurajoutable->getDatnaissAct()
        ]);
    }

    public function getActeur(int $codeAct): ?Acteur
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
            $row['datnaissAct']
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
            $acteur->getDatnaissAct(),
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
                $row['datnaissAct']
            );
        }

        return $acteurs;
    }
}
