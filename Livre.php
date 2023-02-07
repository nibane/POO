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
    
        
    

}


?>