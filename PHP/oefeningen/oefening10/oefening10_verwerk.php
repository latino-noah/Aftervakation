<?php

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $voornaam = trim($_POST['voornaam'] ?? '');
    $achternaam = trim($_POST['achternaam'] ?? '');
    $geboortedatum = trim($_POST['geboortedatum'] ?? '');

    if (!$naam) $errors['naam'] = 'De naam is verplicht.';

    $bestand = fopen("inzending.txt", "a") or die("onmogelijk om het bestand te openen");
    chmod("inzending.txt", 0644);

    if ($bestand === false) {
        echo "er is een fout opgetreden bij het openen";
        exit;
    }
    fwrite($bestand, $voornaam . " " .$achternaam." ". $geboortedatum . "\n");
    fclose($bestand);
} else {
    header("Location: oefening10.html");
}

