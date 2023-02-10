<?php

class Realisateur{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $naissance;
    private array $allFilms;

    function __construct(string $nom, string $prenom, string $sexe, string $naissance){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
        $this->allFilms = [];
    }
    function set_nom($nom){
        $this->nom = $nom;
    }

    function get_nom(){
        return $this->nom;
    }
    function set_prenom($prenom){
        $this->prenom = $prenom;
    }

    function get_prenom(){
        return $this->prenom;
    }
    function set_sexe($sexe){
        $this->sexe = $sexe;
    }

    function get_sexe(){
        return $this->sexe;
    }
    function set_naissance($naissance){
        $this->naissance = $naissance;
    }

    function get_naissance(){
        return $this->naissance;
    }
    function set_allFilms($allFilms){
        $this->allFilms = $allFilms;
    }

    function get_allFilms(){
        return $this->allFilms;
    }

    function ajouterFilm(Film $film){
        $this->allFilms[] = $film;
    }
    
    function afficherFilms() {

        $result =  $this . " a réalisé au cour de sa carrière : <br>";
        foreach ($this->allFilms as $film) {
            $result .= $film . " <br>";
        }

        return $result;
    }

    function __toString(){
        return $this->nom . " " . $this->prenom . " ";
    }

}

?>