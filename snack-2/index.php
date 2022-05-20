<!-- Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

    $name = $_GET['name'];
    $age = $_GET['age'];
    $mail = $_GET['mail'];

    //echo $name . " " . $age . " " . $mail;
    //echo "<br>";

    if(strlen($name) > 3 && str_contains($mail, '.') && str_contains($mail, '@') && is_numeric($age)) {
        echo "<h1> Accesso riuscito </h1>";
    } else {
        echo "<h1> Accesso negato </h1>";
    }

?>
