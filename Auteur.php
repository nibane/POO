<h1>Exercice 2<h/1>

<p></p>

<h2></h2>


<?php

class Auteur {
    
    private string $nom;
    private string $prenom;
    private array $livre;

    
    function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livre = [];
    }


    function __toString(){
        return $this->nom.' '.$this->prenom.' ';
    }

    public function ajouterLivre(Livre $livre){
        $this->livre[] = $livre;
    }

}

?>