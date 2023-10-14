<?php

namespace heritage;
class Salarie extends Humain
{
    public int $salaire;

    public function __construct($name, $salaire = 0)
    {
        $this->salaire = $salaire;
        $this->name = $name;
    }

    public function salaire(): string
    {
        return "Ne peut être calculé";
    }
}