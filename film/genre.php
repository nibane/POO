<?php

class Genre{
    private string $nomGenre;
    private array $films;

    function __construct(string $nomGenre){
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
    function AfficherFilm(){
        foreach ($this->films as $film){
            echo $film;
        }
    }
    function __toString(){
        return " genre : ".$this->nomGenre." ".$this->afficherFilm();
    }

}



?>