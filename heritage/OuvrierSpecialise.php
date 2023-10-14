<?php

namespace heritage;

class OuvrierSpecialise extends Ouvrier
{
    public function salaire(): string
    {
        return parent::salaire() * 1.10;
    }
}