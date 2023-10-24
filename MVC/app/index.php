<?php

namespace app;
use PDO;

include "config/config.inc.php";

spl_autoload_register(function($class) {
    $path=$class;
    if (DIRECTORY_SEPARATOR === '/') {
        $path=str_replace('\\','/',$class);
    }
    $include = HOME."..".DIRECTORY_SEPARATOR.$path.'.php';
    if (file_exists($include))
        require $include;
    else
        echo $include." not found";
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

$router = new \system\Router;
$router->route();