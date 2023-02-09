
<?php

class Acteur{  
    
    private string $nom;
    private string $prenom;
    private array $castings;

    function __construct(string $nom, string $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->castings = [];
        
    }


    function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }
    

   
}

//casting
?>