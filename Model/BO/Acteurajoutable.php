<?php


class Acteurajoutable{


    private String $nomAct;
    private String $preAct;
    private String $natAct;
    private String $datnaissAct;


    public function __construct(string $nomAct, string $preAct, string $natAct, String $datnaissAct){


        $this->nomAct = $nomAct;
        $this->preAct = $preAct;
        $this->natAct = $natAct;
        $this->datnaissAct = $datnaissAct;
    }


    public function getNomAct(): string
    {
        return $this->nomAct;
    }

    public function setNomAct(string $nomAct): void
    {
        $this->nomAct = $nomAct;
    }

    public function getPreAct(): string
    {
        return $this->preAct;
    }

    public function setPreAct(string $preAct): void
    {
        $this->preAct = $preAct;
    }

    public function getNatAct(): string
    {
        return $this->natAct;
    }

    public function setNatAct(string $natAct): void
    {
        $this->natAct = $natAct;
    }

    public function getDatnaissAct(): String
    {
        return $this->datnaissAct;
    }

    public function setDatnaissAct(String $datnaissAct): void
    {
        $this->datnaissAct = $datnaissAct;
    }


}