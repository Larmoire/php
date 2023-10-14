<?php

class Etudiant
{
    private string $no;
    public static int $nb_etu = 0;
    private readonly float $moyenne;
    public static EtatMental $etatMental = EtatMental::Heureux;

    public function __construct($no,$moyenne = 10) {
        $this->no = $no;
        $this->moyenne = $moyenne;
        self::$nb_etu++;
    }

    public static function getNbEtudiant(): int
    {
        return self::$nb_etu;
    }
    public function getNo(): string
    {
        return $this->no;
    }

    public function getMoyenne(): float
    {
        return $this->moyenne;
    }

    function __get($name): string
    {
        if($name === 'moyenne'){
            return $this->moyenne;
        }
        return "Access Denied";
    }

   function __toString(): string
   {
       return "Numero: $this->no, Moyenne: $this->moyenne";
   }
}

enum EtatMental : string
{
    case Heureux = 'Etudiant Heureux';
    case Joyeux = 'Etudiant Joyeux';
    case Bien = 'Etudiant Bien';
}


