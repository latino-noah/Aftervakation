<?php

$nummer = null;
$naam = null;

if(isset($_GET['nummer']) && !empty($_GET['nummer']) && isset($_GET['naam']) && !empty($_GET['naam'])) {

    $nummer = $_GET['nummer'];
    $naam = $_GET['naam'];
    include_once ('oefening5_verwerk_view.php');

} else {
    $error = "Je hebt niet op de link geklikt";
    header('location: oefening5.html');
}