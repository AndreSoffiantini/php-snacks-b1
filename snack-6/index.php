<!-- Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->

<?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
</head>
<body>
    
    <div class="teachers" style="background-color: gray;">

        <ul>
                
                <?php foreach ($db['teachers'] as $teacher) : ?>
                
                    <li>
                        <?= $teacher['name'] . " " . $teacher['lastname'] ?>
                    </li>

                <?php endforeach ?> 

        </ul>

    </div>

    <div class="pm" style="background-color: green">

            <?php foreach ($db['pm'] as $pm) : ?>
                
                <li>
                    <?= $pm['name'] . " " . $pm['lastname'] ?>
                </li>

            <?php endforeach ?> 

    </div>

</body>
</html>
