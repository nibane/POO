
<?php

class Acteur{  
    
    private string $nom;
    private string $prenom;
    private string $sexe ;
    private DateTime $naissance;
    private array $castings;

    function __construct(string $nom, string $prenom, string $sexe, string $naissance)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->sexe = $sexe;
        $this->naissance = new DateTime($naissance);
        $this->castings = [];
        
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
    function set_castings($castings){
        $this->castings = $castings;
    }
    
    function get_castings(){
        return $this->castings;
    }


    function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }
    function __toString()
    {
        return $this->nom." ".$this->prenom." qui est un(e) ".$this->sexe." est née en ".$this->naissance->format("Y/m/d")." ";
    }
    

   
}

//casting
?>