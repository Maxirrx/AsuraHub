<?php



class ClassificationDAO {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addClassification(string $libclaOC): void {
        $sql = "INSERT INTO classification (libclaOC) VALUES (?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$libclaOC]);
    }

    public function getClassification(int $classOC): ?Classification {
        $sql = "SELECT * FROM classification WHERE classOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$classOC]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Classification(
            $row['classOC'],
            $row['libclaOC']
        );
    }

    public function updateClassification(Classification $classification): void {
        $sql = "UPDATE classification SET libclaOC = ? WHERE classOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $classification->getLibclaOC(),
            $classification->getClassOC()
        ]);
    }

    public function deleteClassification(int $classOC): void {
        $sql = "DELETE FROM classification WHERE classOC = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$classOC]);
    }

    public function getAllClassifications(): array {
        $sql = "SELECT * FROM classification";
        $resultat = $this->db->query($sql);
        $classificationsData = $resultat->fetchAll(PDO::FETCH_ASSOC);

        $classifications = [];
        foreach ($classificationsData as $row) {
            $classifications[] = new Classification(
                $row['classOC'],
                $row['libclaOC']
            );
        }

        return $classifications;
    }
}
