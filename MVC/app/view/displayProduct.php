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
    if ($arrayOfProd[0] == "Création impossible"){
        echo '<br>';
        echo $arrayOfProd[0];
    }
    else {
        echo '<thead>';
        echo '<tr>';
        echo    '<th>id</th>';
        echo    '<th>name</th>';
        echo    '<th>price</th>';
        echo    '<th>quantity</th>';
        echo'</tr>';
        echo '</thead>';
        foreach ($arrayOfProd as $product) {
            echo "<tr>";
            echo "<td>" . $product->getId() . "</td>";
            echo "<td>" . $product->getName() . "</td>";
            echo "<td>" . $product->getPrice() . "</td>";
            echo "<td>" . $product->getQuantity() . "</td>";
            echo "</tr>";
        }
    }

    ?>
    </tbody>
</table>
</body>
</html>
