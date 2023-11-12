<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Mon magasin</title>
</head>
<body>
<table>
    <thead>
    <tr>
        <th>id</th>
        <th>name</th>
        <th>price</th>
        <th>quantity</th>
    </tr>
    </thead>
    <tbody>
    <?php
    foreach ($tab as $product) {
        echo "<tr>";
        echo "<td>" . $product->getId() . "</td>";
        echo "<td>" . $product->getName() . "</td>";
        echo "<td>" . $product->getPrice() . "</td>";
        echo "<td>" . $product->getQuantity() . "</td>";
        echo "<td><a href='update/{$product->getId()}'>Update</a></td>";
        echo "<td><a href='delete/{$product->getId()}'>Delete</a></td>";
        echo "</tr>";
    }
    echo '<form method="post" action="../User/logout">';
    echo '<input type="submit" value="Log out" >';
    echo '</form>';
    ?>
    </tbody>
</table>
</body>
</html>
