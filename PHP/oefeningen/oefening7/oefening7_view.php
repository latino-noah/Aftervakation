<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulier validatie</title>
    <style>
        .error{color: red; font-size: 14px; }
    </style>
</head>
<body>
<form method="post" action="oefening7_verwerk.php">
    <label for="naam">Naam:</label>
    <input type="text" id="naam" name="naam">
    <span class="error"><?= $errors['naam'] ?? '' ?></span>
    <br>
    <label for="email">E-mailadres:</label>
    <input type="email" id="email" name="email">
    <span class="error"><?= $errors['email'] ?? '' ?></span>
    <br>
    <label for="leeftijd">Leeftijd:</label>
    <input type="number" id="leeftijd" name="leeftijd">
    <span class="error"><?= $errors['leeftijd'] ?? '' ?></span>
    <br>
    <label for="date">datum:</label>
    <input type="date" id="date" name="geboortedatum">
    <span class="error"><?= $errors['geboortedatum'] ?? '' ?></span>
    <br>
    <label for="time">tijd:</label>
    <input type="time" id="time" name="time">
    <br>
    <label for="text">suggesties:</label>
    <input type="text" id="text" name="text">
    <br>
    <br>
    <input type="submit" value="Verzenden">
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