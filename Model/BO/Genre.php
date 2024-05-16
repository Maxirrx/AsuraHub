<?php

class Genre{

    private String $codGenre;
    private String $libgOC;


    public function __construct(string $codGenre, string $libgOC)
    {


        $this->codGenre = $codGenre;
        $this->libgOC = $libgOC;
    }

    public function getCodGenre(): string
    {
        return $this->codGenre;
    }

    public function setCodGenre(string $codGenre): void
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