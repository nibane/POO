<?php

class Real{
    private string $nom;
    private string $prenom;
    private string $sexe;
    private DateTime $naissance;
    private array $allFilm;

    function __construct(string $nom, string $prenom, string $sexe, string $naissance,){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
        $this->allFilm = [];
    }









    



    public function ajouterFilm(Film $film){
        $this->film[] = $film;
    }

}

?>