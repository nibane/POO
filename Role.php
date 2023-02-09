
<?php

class Role {
    
    private string $nomRole;
    private array $castings;
    
    function __construct(string $nomRole )
    {
    $this->nomRole = $nomRole;
    $this->castings = [];
    }

    function addCasting(Casting $casting) {
        $this->castings[] = $casting;
    }
    


}


//casting

?>