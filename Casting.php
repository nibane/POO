<?php

class casting {
    private Acteur  $acteur;
    private Film $film;
    private Role $role;
    
    function __construct(Acteur $acteur,Film $film ,Role $role)
    {
        $this->acteur =$acteur;
        $this->film = $film;
        $this->role = $role;
        $acteur->addCasting($this);
        $film->addCasting($this);
        $role->addCasting($this);



    }
    
    // setter



    // getter






    // toString



}
        //acteur film role
?>