<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Ajout magasin</title>
</head>
<body>
<form method="post" action="addUser">
    <label for="pseudo">Pseudonyme :</label>
    <input type="text" id="pseudo" name="pseudo"><br>
    <label for="password">Password :</label>
    <input type="password" id="password" name="password"><br>
    <label for="status">Status :</label>
    <select name="status" id="status">
        <option value="Visitor">Visitor</option>
        <option value="Customer">Customer</option>
        <option value="Administrator">Administrator</option>
    </select>
    <input type="submit" value="Envoyer">
</form>
</body>
</html>
