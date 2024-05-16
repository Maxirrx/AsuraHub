<?php

require_once ('../BO/Genre.php');

class GenreDAO {

    private PDO $db;

    public function __construct(PDO $db) {
        $this->db = $db;
    }

    public function addGenre(Genre $genre): void {
        $sql = "INSERT INTO Genre (codGenre, libgOC) VALUES (?, ?)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $genre->getCodGenre(),
            $genre->getLibgOC()
        ]);
    }

    public function getGenre(int $codGenre): ?Genre {
        $sql = "SELECT * FROM Genre WHERE codGenre = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codGenre]);
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        if (!$row) {
            return null;
        }
        return new Genre(
            $row['codGenre'],
            $row['libgOC']
        );
    }

    public function updateGenre(Genre $genre): void {
        $sql = "UPDATE Genre SET libgOC = ? WHERE codGenre = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            $genre->getLibgOC(),
            $genre->getCodGenre()
        ]);
    }

    public function deleteGenre(int $codGenre): void {
        $sql = "DELETE FROM Genre WHERE codGenre = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$codGenre]);
    }

///fonctionnel
    public function getAllGenres() {
        $sql = "SELECT * FROM Genre";
        $resultat = $this->db->query($sql);
        $resultat->setFetchMode(PDO::FETCH_ASSOC);

        foreach ($resultat as $row) {
            $genres[] = new Genre(
                $row['codGenre'],
                $row['libgOC']
            );
        }

        return $genres;
    }
}
