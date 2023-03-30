<?php

class Movie {
    public $titolo;
    public $genere;

    function __construct($_genere){
        $this->genere = $_genere;
    }
}

$movie1 = new Movie();
$movie1->titolo = "Fantozzi";
$movie1->genere = "Comico";



$movie2 = new Movie();
$movie2->titolo = "Cenerentola";
$movie2->genere = "Fantasy";