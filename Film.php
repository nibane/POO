<?php

class Film {

    private string $titre;
    private DateTime $date;
    private DateTime $dure;
    private Real $Real;
    private string $genre;
    private array $casting;


    function __construct(string $titre, string $date, string $dure, Real $Real, string $genre){
        $this->titre = $titre;
        $this->date = new DateTime($date);
        $this->dure = new DateTime($dure);
        $Real = ajouterReal($this);
        $this->genre = $genre;
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

    function set_Real($Real){
        $this->Real = $Real;
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