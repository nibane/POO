<?php

class Film {

    private string $titre;
    private DateTime $date;
    private DateTime $dure;
    private Realisateur $real;
    private Genre $genre;
    private array $casting;


    function __construct(string $titre, string $date, string $dure, Realisateur $real, Genre $genre){
        $this->titre = $titre;
        $this->date = new DateTime($date);
        $this->dure = new DateTime($dure);
        $this->real = $real;
        $this->genre = $genre;
        $genre->ajouterFilm($this);
        $real->ajouterFilm($this);
        $this->casting = [];
    }

    function set_titre($titre){
        $this->titre = $titre;
    }

    function get_titre(){
        return $this->titre;
    }

    function set_date($date){
        $this->date = $date;
    }

    function get_date(){
        return $this->date;
    }

    function set_dure($dure){
        $this->dure = $dure;
    }

    function get_dure(){
        return $this->dure;
    }

    function set_real($real){
        $this->real = $real;
    }
    function get_real($real){
        return $this->real;
    }

    function get_casting(){
        return $this->casting;
    }
    function set_casting($casting){
        $this->casting = $casting;
    }
    
    function synopsis($texte){
        return $texte;
    }



}


?>