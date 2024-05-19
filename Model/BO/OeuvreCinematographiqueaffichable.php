<?php

class OeuvreCinematographiqueaffichable {


    private String $titreOriginal;
    private String $titreFrancais;
    private int $anneeSortie;
    private String $resume;
    private String $nbEpisode;
    private String $codGenre;
    private String $classOC;
    private String $CodRea;


    public function __construct(string $titreOriginal, string $titreFrancais, int $anneeSortie, string $resume, string $nbEpisode, String $codGenre, String $classOC, String $CodRea){



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

    public function getCodGenre(): String
    {
        return $this->codGenre;
    }

    public function setCodGenre(String $codGenre): void
    {
        $this->codGenre = $codGenre;
    }

    public function getClassOC(): String
    {
        return $this->classOC;
    }

    public function setClassOC(String $classOC): void
    {
        $this->classOC = $classOC;
    }

    public function getCodRea(): String
    {
        return $this->CodRea;
    }

    public function setCodRea(String $CodRea): void
    {
        $this->CodRea = $CodRea;
    }


}