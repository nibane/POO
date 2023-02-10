<?php

class Film {

    private string $titre;
    private int $date;
    private int $dure;
    private Realisateur $real;
    private Genre $genre;
    private array $castings;


    function __construct(string $titre, int $date, int $dure, Realisateur $real, Genre $genre){
        $this->titre = $titre;
        $this->date = $date;
        $this->dure = $dure;
        $this->real = $real;
        $this->genre = $genre;
        $genre->ajouterFilm($this);
        $real->ajouterFilm($this);
        $this->castings = [];
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
    function get_real(){
        return $this->real;
    }

    function get_castings(){
        return $this->castings;
    }
    function set_casting($castings){
        $this->castings = $castings;
    }
    function set_genre($genre){
        $this->genre = $genre;
    }
    function get_genre(){
        return $this->genre;
    }


    function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }
    
    function afficherCasting(){
        echo "Dans le film " . $this->get_titre() . " réalisé par ". $this->get_real(). "  :<BR>";
        foreach($this->castings as $casting){
            echo $casting->get_role() ." a été incarné par " . $casting->get_acteur() . "<br>"; 
        }
    }

    function __toString() {
        return $this->titre . " sorti en : " . $this->date;
    }


}

//casting
?>
