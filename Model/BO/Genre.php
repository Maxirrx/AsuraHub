<?php

class Genre{

    private int $codGenre;
    private String $libgOC;


    public function __construct(int $codGenre, string $libgOC)
    {


        $this->codGenre = $codGenre;
        $this->libgOC = $libgOC;
    }

    public function getCodGenre(): int
    {
        return $this->codGenre;
    }

    public function setCodGenre(int $codGenre): void
    {
        $this->codGenre = $codGenre;
    }

    public function getLibgOC(): string
    {
        return $this->libgOC;
    }

    public function setLibgOC(string $libgOC): void
    {
        $this->libgOC = $libgOC;
    }


}