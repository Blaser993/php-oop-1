<?php

require_once __DIR__."./models/Movie.php";



$movie1 = new Movie("italiano");
$movie1->setLenguage(true);
$movie1->titolo = "Fantozzi";
$movie1->genere = $generi[0];



$movie2 = new Movie("koreano");
$movie2->titolo = "Cenerentola";
$movie2->genere = $generi[3]." - ".$generi[4]." - ".$generi[1];



?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
</head>
<body>
    <div class="film">
        <h1>
            <?php
            echo $movie1->titolo
            ?>
        </h1>
        <p>
            <?php
            echo $movie1->genere
            ?>
        </p>
        <p>
            <?php
            echo $movie1->lingua
            ?>
        </p>
    </div>

    <div class="film">
        <h1>
            <?php
            echo $movie2->titolo
            ?>
        </h1>
        <p>
            <?php
            echo $movie2->genere
            ?>
        </p>
        <p>
            <?php
            echo $movie2->lingua
            ?>
        </p>
    </div>
</body>
</html>