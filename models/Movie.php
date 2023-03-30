<?php



class Movie {
    public $titolo;
    public $genere=[];
    public $lingua;

    function __construct($_lingua) {
        $this->lingua = $_lingua;
    }

    function setLenguage($lingua) {
        if($lingua === true){
            $this->lingua = $this->lingua.", lingua originale";
        }
    }

    function setGeneri($generi){
        $this->genere=$generi;
    }

    function getLenguage(){
        return $this->lingua;
    }


}
