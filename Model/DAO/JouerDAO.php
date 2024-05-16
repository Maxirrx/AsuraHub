<?php


class JouerDAO {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addJouer(Jouer $jouer): void {
        $sql = "INSERT INTO Jouer (codeAct, codifOC, roleAct) VALUES (?, ?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $jouer->getCodeAct()->getCodeAct(),
            $jouer->getCodifOC()->getCodifOC(),
            $jouer->isRoleAct()
        ]);
    }

    public function getJouer(Acteur $codeAct, OeuvreCinematographique $codifOC): ?Jouer {
        $sql = "SELECT * FROM Jouer WHERE codeAct = ? AND codifOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeAct->getCodeAct(), $codifOC->getCodifOC()]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Jouer(
            $codeAct,
            $codifOC,
            (bool) $row['roleAct']
        );
    }

    public function updateJouer(Jouer $jouer): void {
        $sql = "UPDATE Jouer SET roleAct = ? WHERE codeAct = ? AND codifOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $jouer->isRoleAct(),
            $jouer->getCodeAct()->getCodeAct(),
            $jouer->getCodifOC()->getCodifOC()
        ]);
    }

    public function deleteJouer(Acteur $codeAct, OeuvreCinematographique $codifOC): void {
        $sql = "DELETE FROM Jouer WHERE codeAct = ? AND codifOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codeAct->getCodeAct(), $codifOC->getCodifOC()]);
    }

    public function getAllJouer(): array {
        $sql = "SELECT * FROM Jouer";
        $resultat = $this->db->query($sql);
        $jouerData = $resultat->fetchAll(PDO::FETCH_ASSOC);

        $jouer = [];
        foreach ($jouerData as $row) {
            $codeAct = $this->getActeurById($row['codeAct']);
            $codifOC = $this->getOeuvreCinematographiqueById($row['codifOC']);

            $jouer[] = new Jouer(
                $codeAct,
                $codifOC,
                (bool) $row['roleAct']
            );
        }

        return $jouer;
    }

}
