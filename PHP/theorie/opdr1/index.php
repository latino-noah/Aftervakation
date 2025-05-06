<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berekeningen</title>
</head>
<body>
<h1>Voer twee getallen in</h1>
<form action="berekeningen.php" method="post">
    <label for="getal1">Getal 1:</label>
    <input type="number" name="getal1" id="getal1" required><br><br>

    <label for="getal2">Getal 2:</label>
    <input type="number" name="getal2" id="getal2" required><br><br>

    <label for="berekening">Kies een berekening:</label>
    <select name="berekening" id="berekening">
        <option value="som">Som (+)</option>
        <option value="verschil">Verschil (-)</option>
        <option value="product">Product (*)</option>
        <option value="quotient">Quotiënt (/)</option>
    </select><br><br>

    <button type="submit">Bereken</button>
</form>
</body>
</html>
