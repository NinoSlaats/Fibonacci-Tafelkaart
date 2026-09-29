<?php
// Tafelkaart Opdracht

function genereerTafelkaart($n) {
    echo "Tafel van\t";
    for ($col = 1; $col <= $n; $col++) {
        echo $col . "\t";
    }
    echo "\n";
    echo str_repeat("-", 8 + ($n * 8)) . "\n";

    for ($row = 1; $row <= $n; $row++) {
        echo "Row $row\t";
        
        for ($col = 1; $col <= $n; $col++) {
            $resultaat = $row * $col;
            echo $resultaat . "\t";
        }
        echo "\n";
    }
}

$n = (int)readline("Voer de grootte van de tafelkaart in (n): ");
genereerTafelkaart($n);
?>