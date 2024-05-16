<?php

class Classification{

    private int $classOC;
    private string $libclaOC;


    public function __construct(int $classOC, string $libclaOC){


        $this->classOC = $classOC;
        $this->libclaOC = $libclaOC;
    }

    public function getClassOC(): int
    {
        return $this->classOC;
    }

    public function setClassOC(int $classOC): void
    {
        $this->classOC = $classOC;
    }

    public function getLibclaOC(): string
    {
        return $this->libclaOC;
    }

    public function setLibclaOC(string $libclaOC): void
    {
        $this->libclaOC = $libclaOC;
    }


}