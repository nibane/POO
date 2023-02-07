<h1>Exercice 2<h/1>

<p>Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.Une méthode toString() sera appréciée dans chacune de vos classes.Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur :</p>

<h2>Résultat</h2>


<?php


class Livre {
    
    private string $titre;
    private int $nbPage;
    private DateTime $parution;
    private int $prix;
    private string $auteur;

    function __construct(string $titre, int $nbPage, string $parution, int $prix, string $auteur){
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->parution = new DateTime($parution);
        $this->prix = $prix;
        $this->auteur = $auteur;
    }
    function set_titre($titre){
        $this->titre = $titre;
    }

    function get_titre(){
        return $this->titre;
    }
    function set_nbPage($nbPage){
        $this->nbPage = $nbPage;
    }

    function get_nbPage(){
        return $this->nbPage;
    }
    function set_parution($parution){
        $this->parution = $parution;
    }

    function get_parution(){
        return $this->parution;
    }
    function set_prix($prix){
        $this->prix = $prix;
    }

    function get_prix(){
        return $this->prix;
    }
    function set_auteur($auteur){
        $this->auteur = $auteur;
    }

    function get_auteur(){
        return $this->auteur;
    }
    
    function __toString(){
        return $this->titre." ".$this->nbPage." ".$this->parution." ".$this->prix." ".$this->auteur;
    }
    

}


?>