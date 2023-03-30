<?php

require_once __DIR__."./models/Movie.php";



$movie1 = new Movie("comico");
$movie1->titolo = "Fantozzi";
// $movie1->genere = "Comico";



$movie2 = new Movie("fantasy");
$movie2->titolo = "Cenerentola";
// $movie2->genere = "Fantasy";

var_dump($movie1, $movie2);


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
    
</body>
</html>