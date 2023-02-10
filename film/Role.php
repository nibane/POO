
<?php

class Role {
    
    private string $nomRole;
    private array $castings;
    
    function __construct(string $nomRole )
    {
    $this->nomRole = $nomRole;
    $this->castings = [];
    }

    function set_nomRole($nomRole){
        $this->nomRole = $nomRole;
    }
    
    function get_nomRole(){
        return $this->nomRole;
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
        return $this->nomRole."<br>";
    }
    function AfficherCasting(){
        foreach ($this->castings as $acteur){
            echo $acteur;
        }
    }
}


//casting

?>