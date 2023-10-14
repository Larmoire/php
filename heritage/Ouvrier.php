<?php

namespace heritage;

class Ouvrier extends Salarie
{
    public function salaire(): string
    {
        return $this->salaire;
    }
}