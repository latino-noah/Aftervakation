<?php


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $naam = $_POST['naam'];
    $leeftijd = $_POST['leeftijd'];

    include_once("oefening6_view.php");
} else {
    header("Location: oefening10.html");
}