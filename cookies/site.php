<?php
session_start();
if(isset($_SESSION["auth"])){
    echo $_SESSION["auth"][1];
}
else {
    echo 'Accès refusé';
}
