<?php

class Movie {
    public $titolo;
    public $genere;
    public bool $lingua;

    function __construct($_lingua) {
        $this->lingua = $_lingua;
    }

    function public setLenguage($lingua) {
        if($lingua === true){
            $this->lingua = "lingua originale";
        }
    }

    function public getLenguage(){
        return $this->lingua;
    }


}
