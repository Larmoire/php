<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Test Promo</title>
</head>
<body>
<pre>
<?php require "Promo.php";
    $etudiant1 = new Etudiant("E001",10);
    $etudiant2 = new Etudiant("E002",moyenne: 20);

    $promo = new Promo();
    $promo->addEtu($etudiant1);
    $promo->addEtu($etudiant2);

    try {
        $promo->addEtu($etudiant1);
    }
    catch (Exception $e) {
        echo $e;
        echo '<br>';
    }

    echo $promo->getMoyenne();
    echo '<br>';

    $promo->delEtu($etudiant1);
    try{
        $promo->delEtu($etudiant1);
    }
    catch (Exception $e){
        echo $e;
        echo '<br>';
    }

    $promo->delEtu($etudiant2);
    try{
        $promo->getMoyenne();
    }
    catch (Exception $e){
        echo $e;
        echo '<br>';
    }
?>
</pre>
</body>
