<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
const HOME = __DIR__.DIRECTORY_SEPARATOR."..".DIRECTORY_SEPARATOR;
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