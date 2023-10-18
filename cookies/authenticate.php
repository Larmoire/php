<?php
if (isset($_POST['pseudonyme'])) {
    $pseudonyme = $_POST['pseudonyme'];
    setcookie('pseudonyme', $pseudonyme, time() + 3600, '/');
    header('Location: persistent_form.php');
    exit;
}
