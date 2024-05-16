<?php

class Realisateur{

    private String $codRea;

    private String $nomRea;

    private String $prenomRea;

    private String $natRea;

    private bool $recompenseRealisateur;


    public function __construct(string $codRea, string $nomRea, string $prenomRea, string $natRea, bool $recompenseRealisateur){


        $this->codRea = $codRea;
        $this->nomRea = $nomRea;
        $this->prenomRea = $prenomRea;
        $this->natRea = $natRea;
        $this->recompenseRealisateur = $recompenseRealisateur;
    }

    public function getCodRea(): string
    {
        return $this->codRea;
    }

    public function setCodRea(string $codRea): void
    {
        $this->codRea = $codRea;
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

    public function isRecompenseRealisateur(): bool
    {
        return $this->recompenseRealisateur;
    }

    public function setRecompenseRealisateur(bool $recompenseRealisateur): void
    {
        $this->recompenseRealisateur = $recompenseRealisateur;
    }


}