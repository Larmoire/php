<?php


include "config/config.inc.php";
include "controller/Home.php";
include "../system/Router.php";

spl_autoload_register(function($class) {
    $path=$class;
    if (DIRECTORY_SEPARATOR === '/') {
        $path=str_replace('\\','/',$class);
    }
    if (file_exists($path.'.php'))
        require_once $path.'.php';
    });

const CFG = array(
    "db" => array(
        "host" => HOME."data".DIRECTORY_SEPARATOR,
        "port" => null,
        "database" => "madb.db",
        "login" => "",
        "password" => "",
        "options" => array(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION),
        "exec" => "PRAGMA foreign_keys = ON;"
    ),
    "siteURL" => "http://localhost:8080/MVC/app/" //votre url
);

$router = new Router();
$router->route();