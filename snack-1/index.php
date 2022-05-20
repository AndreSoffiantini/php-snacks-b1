<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

    $matches = [
        
        [
            "home_team" => "Boston Celtics",
            "away_team" => "Los Angeles Clippers",
            "home_team_score" => "115",
            "away_team_score" => "92"
        ],

        [
            "home_team" => "San Antonio Spurs",
            "away_team" => "Los Angeles Lakers",
            "home_team_score" => "110",
            "away_team_score" => "94"
        ],

        [
            "home_team" => "Phoenix Suns",
            "away_team" => "Charlotte Hornets",
            "home_team_score" => "116",
            "away_team_score" => "112"
        ]

    ];

    for ($i=0; $i < count($matches) ; $i++) { 
        
       echo $matches[$i]["home_team"] . ' - ' . $matches[$i]["away_team"] . ' | ' . $matches[$i]["home_team_score"] . ' - ' . $matches[$i]["away_team_score"] ;
       echo "<br>";

    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    
</body>
</html>
