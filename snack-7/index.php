<!-- Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

    $classArray = [
        [
            "name" => "Andrea",
            "surname" => "Soffiantini",
            "grades" => [24, 30, 25, 20]

        ],
        [
            "name" => "Mario",
            "surname" => "Rossi",
            "grades" => [21, 20, 15, 30]

        ],
        [
            "name" => "Luca",
            "surname" => "Bianchi",
            "grades" => [25, 21, 18, 16]

        ],
        [
            "name" => "Maria",
            "surname" => "Verdi",
            "grades" => [20, 27, 19, 29]

        ]
    ];

    for ($i=0; $i < count($classArray); $i++) { 
        
        echo $classArray[$i]["name"] . " " . $classArray[$i]["surname"];
        echo "<br>";

        echo "Media voti: " . array_sum($classArray[$i]["grades"])/count($classArray[$i]["grades"]);
        echo "<br><br>";

    }

?>