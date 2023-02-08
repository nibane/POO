<?php

class Genre{
    private string $nomGenre;
    private array $films;

    function __construct($nomGenre){
        $this->nomGenre = $nomGenre;
        $this->films = [];
    }

    function ajouterFilm(Film $film){
        $this->films[] = $film; 
    }

}



?>