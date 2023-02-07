<h1>Exercice 2<h/1>

<p></p>

<h2>Résultat</h2>


<?php

class Auteur {
    
    private string $nom;
    private string $prenom;

    
    function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
    }


    function __toString(){
        return $this->nom.' '.$this->prenom.' ';
    }
}

?>