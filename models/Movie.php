<?php

$generi = ["Comico","Avventura","Tragedia","Fantasy","Animazione"];

class Movie {
    public $titolo;
    public $genere;
    public $lingua;

    function __construct($_lingua) {
        $this->lingua = $_lingua;
    }

    function setLenguage($lingua) {
        if($lingua === true){
            $this->lingua = "lingua originale";
        }
    }

    function getLenguage(){
        return $this->lingua;
    }


}
