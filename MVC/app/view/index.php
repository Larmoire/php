<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon magasin</title>
</head>
<body>
<table>
    <tbody>
    <?php
    session_start();
    if(isset($_SESSION["user"])) {
        echo $_SESSION["user"]->getPseudo();
        echo '<form method="post" action="../User/logout">';
        echo '<input type="submit" value="Log out" >';
        echo '</form>';

        echo '<form method="post" action="../Product/index">';
        echo '<input type="submit" value="Voir products" >';
        echo '</form>';

    }
    else {
        echo '<form method="post" action="../User/login">';
        echo '<input type="submit" value="Login" >';
        echo '</form>';

        echo '</form>';
        echo '<form method="post" action="../User/createUser">';
        echo '<input type="submit" value="Creer user" >';
        echo '</form>';
    }

    ?>
    </tbody>
</table>
</body>
</html>
