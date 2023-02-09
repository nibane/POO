<?php

class Genre{
    private string $nomGenre;
    private array $films;

    function __construct($nomGenre){
        $this->nomGenre = $nomGenre;
        $this->films = [];
    }
    function set_nomGenre($nomGenre){
        $this->nomGenre = $nomGenre;
    }
    
    function get_nomGenre(){
        return $this->nomGenre;
    }
    function set_films($films){
        $this->films = $films;
    }
    
    function get_films(){
        return $this->films;
    }

    function ajouterFilm(Film $film){
        $this->films[] = $film; 
    }

}



?>