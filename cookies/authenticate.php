<?php
$users = array(
    "jojo" => array("password" => "pass1", "status" => "administrator"),
    "raoul" => array("password" => "pass2", "status" => "visitor"),
    "roméo" => array("password" => "pass3", "status" => "customer"),
);

if (isset($_POST['pseudonyme']) && isset($_POST['mot_de_passe'])) {
    session_start();
    $pseudonyme = $_POST['pseudonyme'];
    $mot_de_passe = $_POST['mot_de_passe'];

    if (array_key_exists($pseudonyme, $users) && $users[$pseudonyme]['password'] === $mot_de_passe) {
        $_SESSION["auth"] = [$pseudonyme, $users[$pseudonyme]['status']];
        header("Location: site.php");

    } else {
        header("HTTP/1.1 302 Found");
        header("Location: persistent_form.php");
        setcookie('pseudonyme', $pseudonyme, time() + 3600, '/');
        exit;
    }
}

