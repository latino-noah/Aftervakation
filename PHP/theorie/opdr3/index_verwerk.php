<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = $_POST['naam'];
    $studentnummer = $_POST['studentnummer'];
    $klas = $_POST['klas'];
    $leerlijn1 = $_POST['leerlijn1'];
    $cijfer1 = $_POST['cijfer1'];
    $leerlijn2 = $_POST['leerlijn2'];
    $cijfer2 = $_POST['cijfer2'];
    $leerlijn3 = $_POST['leerlijn3'];
    $cijfer3 = $_POST['cijfer3'];
    $leerlijn4 = $_POST['leerlijn4'];
    $cijfer4 = $_POST['cijfer4'];


    $gemiddelde = ($cijfer1 + $cijfer2 + $cijfer3 + $cijfer4) / 4;


    $output = "
    <h1>Gegevens van de Student</h1>
    <p><strong>Naam:</strong> $naam</p>
    <p><strong>Studentnummer:</strong> $studentnummer</p>
    <p><strong>Klas:</strong> $klas</p>

    <h2>Leerlijnen en Cijfers:</h2>
    <p>$leerlijn1: $cijfer1</p>
    <p>$leerlijn2: $cijfer2</p>
    <p>$leerlijn3: $cijfer3</p>
    <p>$leerlijn4: $cijfer4</p>

    <h2>Gemiddeld Cijfer: " . number_format($gemiddelde, 2) . "</h2>";


    print($output);
}
?>
