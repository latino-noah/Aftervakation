<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Haal de waarden van de getallen en de gekozen berekening op
    $getal1 = $_POST['getal1'];
    $getal2 = $_POST['getal2'];
    $berekening = $_POST['berekening'];

    // Voer de juiste berekening uit op basis van de keuze
    switch ($berekening) {
        case 'som':
            $resultaat = $getal1 + $getal2;
            $bericht = "Som: $resultaat";
            break;
        case 'verschil':
            $resultaat = $getal1 - $getal2;
            $bericht = "Verschil: $resultaat";
            break;
        case 'product':
            $resultaat = $getal1 * $getal2;
            $bericht = "Product: $resultaat";
            break;
        case 'quotient':
            if ($getal2 != 0) {
                $resultaat = $getal1 / $getal2;
                $bericht = "Quotiënt: $resultaat";
            } else {
                $bericht = "Quotiënt: Onbepaald (delen door nul)";
            }
            break;
        default:
            $bericht = "Ongeldige keuze.";
    }

    // Resultaat tonen
    echo "<h1>Resultaat</h1>";
    echo "<p>$bericht</p>";
}
?>
