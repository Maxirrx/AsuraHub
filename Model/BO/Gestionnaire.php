<?php

class Gestionnaire{

    private int $codeGest;

    private String $nomGest;

    private String $prenomGest;

    private String $mdpGest;


    public function __construct(int $codeGest, string $nomGest, string $prenomGest, string $mdpGest){


        $this->codeGest = $codeGest;
        $this->nomGest = $nomGest;
        $this->prenomGest = $prenomGest;
        $this->mdpGest = $mdpGest;
    }

    public function getCodeGest(): int
    {
        return $this->codeGest;
    }

    public function setCodeGest(int $codeGest): void
    {
        $this->codeGest = $codeGest;
    }

    public function getNomGest(): string
    {
        return $this->nomGest;
    }

    public function setNomGest(string $nomGest): void
    {
        $this->nomGest = $nomGest;
    }

    public function getPrenomGest(): string
    {
        return $this->prenomGest;
    }

    public function setPrenomGest(string $prenomGest): void
    {
        $this->prenomGest = $prenomGest;
    }

    public function getMdpGest(): string
    {
        return $this->mdpGest;
    }

    public function setMdpGest(string $mdpGest): void
    {
        $this->mdpGest = $mdpGest;
    }


}