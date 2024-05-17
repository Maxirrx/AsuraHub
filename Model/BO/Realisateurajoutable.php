<?php

class Realisateurajoutable{

    private String $nomRea;

    private String $prenomRea;

    private String $natRea;

    private int $recompenseRealisateur;


    public function __construct(string $nomRea, string $prenomRea, string $natRea, int $recompenseRealisateur){



        $this->nomRea = $nomRea;
        $this->prenomRea = $prenomRea;
        $this->natRea = $natRea;
        $this->recompenseRealisateur = $recompenseRealisateur;
    }

    public function getNomRea(): string
    {
        return $this->nomRea;
    }

    public function setNomRea(string $nomRea): void
    {
        $this->nomRea = $nomRea;
    }

    public function getPrenomRea(): string
    {
        return $this->prenomRea;
    }

    public function setPrenomRea(string $prenomRea): void
    {
        $this->prenomRea = $prenomRea;
    }

    public function getNatRea(): string
    {
        return $this->natRea;
    }

    public function setNatRea(string $natRea): void
    {
        $this->natRea = $natRea;
    }

    public function isRecompenseRealisateur(): int
    {
        return $this->recompenseRealisateur;
    }

    public function setRecompenseRealisateur(int $recompenseRealisateur): void
    {
        $this->recompenseRealisateur = $recompenseRealisateur;
    }


}