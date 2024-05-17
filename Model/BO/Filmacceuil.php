<?php

class Filmacceuil
{

    private int $codifOC;
    private string $titreOriginal;


    public function __construct(int $codifOC, string $titreOriginal){
        $this->codifOC = $codifOC;
        $this->titreOriginal = $titreOriginal;
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
}