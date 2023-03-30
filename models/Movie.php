<?php

class Movie {
    public $titolo;
    public $genere;

    function __construct($_genere){
        $this->genere = $_genere;
    }
}
