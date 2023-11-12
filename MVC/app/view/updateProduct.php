<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajout magasin</title>
</head>
<body>
<?php
echo '<form method="post" action="../updateProduct">';
    echo '<input type="hidden" id= "Id" name = Id value="' . $prod->getId() . '"/>';
    echo '<label for="Name">Name :</label>';
    echo '<input type="text" id="Name" name="Name" value="' . $prod->getName() . '"><br>';
    echo '<label for="Price">Price :</label>';
    echo '<input type="number" id="Price" name="Price" value="' . $prod->getPrice() . '"><br>';
    echo '<label for="Quantity">Quantity :</label>';
    echo '<input type="number" id="Quantity" name="Quantity" value="' . $prod->getQuantity() . '"><br>';
    echo' <input type="submit" value="Envoyer">';

echo '</form>';
?>
</body>
</html>
