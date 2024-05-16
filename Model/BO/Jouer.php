<?php

class Jouer{

    private Acteur $codeAct;
    private OeuvreCinematographique $codifOC;
    private bool $roleAct;


    public function __construct(Acteur $codeAct, OeuvreCinematographique $codifOC, bool $roleAct)
    {


        $this->codeAct = $codeAct;
        $this->codifOC = $codifOC;
        $this->roleAct = $roleAct;
    }

    public function getCodeAct(): Acteur
    {
        return $this->codeAct;
    }

    public function setCodeAct(Acteur $codeAct): void
    {
        $this->codeAct = $codeAct;
    }

    public function getCodifOC(): OeuvreCinematographique
    {
        return $this->codifOC;
    }

    public function setCodifOC(OeuvreCinematographique $codifOC): void
    {
        $this->codifOC = $codifOC;
    }

    public function isRoleAct(): bool
    {
        return $this->roleAct;
    }

    public function setRoleAct(bool $roleAct): void
    {
        $this->roleAct = $roleAct;
    }


}