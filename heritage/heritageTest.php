<?php

    namespace heritage;
    require_once 'Humain.php';
    require_once 'Salarie.php';
    require_once 'Ouvrier.php';
    require_once 'OuvrierSpecialise.php';

    $ouvrier = new Ouvrier("Ouvrier", 1000);
    $salarie = new Salarie("Salarie");
    $ouvrierspe = new OuvrierSpecialise("OuvrierSpe", 1000);


    echo $ouvrier->salaire()."<br>";
    echo $ouvrierspe->salaire()."<br>";
    echo $salarie->salaire()."<br>";


