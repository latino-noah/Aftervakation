<?php

$naam = filter_var(trim($_POST['naam']));
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
$leeftijd = filter_var(trim($_POST['leeftijd']), FILTER_SANITIZE_STRING);
$geboortedatum = filter_var(trim($_POST['geboortedatum']), FILTER_SANITIZE_STRING);

if (empty($naam)) {
    $errors['naam'] = 'De naam is verplicht.';
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email is verplicht.';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'ongeldige email.';
}

if (!is_numeric($leeftijd)) {
    $errors['leeftijd'] = 'De leeftijd is verplicht.';
} elseif (!is_numeric($leeftijd)) {
    $errors['leeftijd'] = "De leeftijd moet een numerieke waarde.";
}

if (!empty($geboortedatum)) {
    $errors['geboortedatum'] = 'De datum is verplicht.';
}elseif (!is_numeric($geboortedatum)) {
    $errors['geboortedatum'] = "De datum mag niet langer dan 100 jaar geleden zijn.";
}

if (empty($errors)) {

    include 'oefening7_verwerk_view.php';
    exit;

} else {
    include 'oefening7.php';
}