<?php
namespace system;

/**
 * Class Router
 */
class Router
{
    /**
     * permet d'éxécuter la méthode d'un controleur choisi
     * si la méthode est omise alors index est choisi
     * Les URL saisies sont de la forme
     *      site/controleur
     *      site/controleur/method
     *      site/controleur/method/param1/...
     */
    function route(): void
    {
        $scriptName = $_SERVER["SCRIPT_NAME"];
        $requestURI = $_SERVER["REQUEST_URI"];

        //Le script name contient index.php on le supprime
        $prefix = substr($scriptName, 0, strlen($scriptName) - 9);
        //Le suffixe est le requestURI privé du préfix
        $suffix = substr($requestURI,strlen($prefix));
        $params = explode("/", $suffix);
        if ($params[0] == "") {
            header("Location: http://localhost:8080/devphp/MVC/app/Home/index");
            die;
        }
        else {
            $controller = $params[0];
            array_shift($params);

            if ($params[0]==""){
                $controllerMethod="index";
            }
            else {
                $controllerMethod=$params[0];
            }

            array_shift($params);
        }
        $class = "\app\controller\\".$controller;
        $controllerinstance = new $class();
        $controllerinstance->$controllerMethod($params);
    }
}