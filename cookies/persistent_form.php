<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire Persistant</title>
</head>
<body>
<h2>Formulaire Persistant</h2>
<form action="authenticate.php" method="post">
    <?php

    $pseudonyme = $_COOKIE['pseudonyme'] ?? "";
    ?>
    Pseudonyme: <input type="text" name="pseudonyme" value="<?php echo $pseudonyme; ?>"><br>
    Mot de passe: <input type="password" name="mot_de_passe"><br>
    <input type="submit" value="Se connecter" >
</form>
</body>
</html>
