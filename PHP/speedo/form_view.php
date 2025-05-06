<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier validatie</title>
    <link rel="stylesheet" href="form.css">
    <style>
        .error{color: red; font-size: 14px; }
    </style>
</head>
<body>
<form method="post" action="form_verwerk.php">
    <label for="naam">Voornaam:</label>
    <input type="text" id="naam" name="naam">
    <span class="error"><?= $errors['naam'] ?? '' ?></span>
    <br>
    <label for="naam">Achternaam:</label>
    <input type="text" id="naam" name="naam">
    <span class="error"><?= $errors['naam'] ?? '' ?></span>
    <br>
    <label for="naam">Tussenvoegsel:</label>
    <input type="text" id="naam" name="naam">
    <span class="error"><?= $errors['naam'] ?? '' ?></span>
    <br>
    <label for="email">E-mailadres:</label>
    <input type="email" id="email" name="email">
    <span class="error"><?= $errors['email'] ?? '' ?></span>
    <br>
    <label for="phone">Telefoonnummer:</label>
    <input type="tel" id="phone" name="phone">
    <span class="error"><?= $errors['phone'] ?? '' ?></span>
    <br>
    <label for="naam">Straatnaam:</label>
    <input type="text" id="naam" name="naam">
    <span class="error"><?= $errors['naam'] ?? '' ?></span>
    <br>
    <label for="street">Straatnummer:</label>
    <input type="number" id="street" name="streetnumber">
    <span class="error"><?= $errors['streetnumber'] ?? '' ?></span>
    <br>
    <label for="number">BSN-nummer:</label>
    <input type="text" id="number" name="number">
    <span class="error"><?= $errors['number'] ?? '' ?></span>
    <br>
    <label for="vacature">Kies een vacature:</label>
    <select id="vacature" name="vacature" required>
        <option value="" disabled selected>Maak een keuze</option>
        <option value="developer">Vakken vuller</option>
        <option value="designer">Cashiere</option>
        <option value="marketing">leiding gevende</option>
        <option value="sales">Team manager</option>
    </select>
    <span class="error"><?= $errors['vacature'] ?? '' ?></span>

    <br>
    <br>
    <input type="submit" value="Inschrijven">
</form>
<?php if (isset($errors)) { ?>
    <ul>
        <?php foreach ($errors as $error) { ?>
            <li><?= $error ?></li>
        <?php } ?>
    </ul>
<?php } ?>
</body>
</html>