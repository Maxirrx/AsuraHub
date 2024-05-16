<?php

class OeuvreCinematographique{

    private int $codifOC;
    private String $titreOriginal;
    private String $titreFrancais;
    private int $anneeSortie;
    private String $resume;
    private String $nbEpisode;
    private Genre $codGenre;
    private Classification $classOC;
    private Realisateur $CodRea;


    public function __construct(int $codifOC, string $titreOriginal, string $titreFrancais, int $anneeSortie, string $resume, string $nbEpisode, Genre $codGenre, Classification $classOC, Realisateur $CodRea){


        $this->codifOC = $codifOC;
        $this->titreOriginal = $titreOriginal;
        $this->titreFrancais = $titreFrancais;
        $this->anneeSortie = $anneeSortie;
        $this->resume = $resume;
        $this->nbEpisode = $nbEpisode;
        $this->codGenre = $codGenre;
        $this->classOC = $classOC;
        $this->CodRea = $CodRea;
    }

    public function getCodifOC(): int
    {
        return $this->codifOC;
    }

    public function setCodifOC(int $codifOC): void
    {
        $this->codifOC = $codifOC;
    }

    public function getTitreOriginal(): string
    {
        return $this->titreOriginal;
    }

    public function setTitreOriginal(string $titreOriginal): void
    {
        $this->titreOriginal = $titreOriginal;
    }

    public function getTitreFrancais(): string
    {
        return $this->titreFrancais;
    }

    public function setTitreFrancais(string $titreFrancais): void
    {
        $this->titreFrancais = $titreFrancais;
    }

    public function getAnneeSortie(): int
    {
        return $this->anneeSortie;
    }

    public function setAnneeSortie(int $anneeSortie): void
    {
        $this->anneeSortie = $anneeSortie;
    }

    public function getResume(): string
    {
        return $this->resume;
    }

    public function setResume(string $resume): void
    {
        $this->resume = $resume;
    }

    public function getNbEpisode(): string
    {
        return $this->nbEpisode;
    }

    public function setNbEpisode(string $nbEpisode): void
    {
        $this->nbEpisode = $nbEpisode;
    }

    public function getCodGenre(): Genre
    {
        return $this->codGenre;
    }

    public function setCodGenre(Genre $codGenre): void
    {
        $this->codGenre = $codGenre;
    }

    public function getClassOC(): Classification
    {
        return $this->classOC;
    }

    public function setClassOC(Classification $classOC): void
    {
        $this->classOC = $classOC;
    }

    public function getCodRea(): Realisateur
    {
        return $this->CodRea;
    }

    public function setCodRea(Realisateur $CodRea): void
    {
        $this->CodRea = $CodRea;
    }


}