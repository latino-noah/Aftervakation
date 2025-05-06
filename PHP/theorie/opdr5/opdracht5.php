<?php

if(!file_exists('bezoekers.txt')) {
    file_put_contents('bezoekers.txt', '0');
}

$teller = file_get_contents('bezoekers.txt');
$teller++;

file_put_contents('bezoekers.txt', $teller);

require "opdracht5_view.php";