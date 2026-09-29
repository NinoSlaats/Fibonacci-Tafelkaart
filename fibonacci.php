<?php
// Fibonacci Opdracht

function genereerFibonacci($n) {
    if ($n <= 0) {
        echo "Voer een getal groter dan 0 in.\n";
        return;
    }

    $reeks = [];
    $a = 1;
    $b = 2; // Startpunt zoals in het voorbeeld van de opdracht (1, 2, 3, 5...)

    for ($i = 0; $i < $n; $i++) {
        $reeks[] = $a;
        $volgendGetal = $a + $b;
        $a = $b;
        $b = $volgendGetal;
    }

    echo implode(", ", $reeks) . "\n";
}

$n = (int)readline("Voer in hoeveel stappen van de Fibonacci-reeks je wilt zien (n): ");
genereerFibonacci($n);
?>