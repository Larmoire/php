<?php
class Home
{
    public function __construct()
    {
    //instanciation de l'attribut
    }
    function index(){
    //Solicitation du modèle
    //Solicitation de la vue
    }
    function method(){
        echo "method";
    }
    function methodeWithParameter(array $params): void
    {
        var_dump($params);
    }
}