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

    function set_acteur($acteur){
        $this->acteur = $acteur;
    }
    
    function get_acteur(){
        return $this->acteur;
    }
    function set_film($film){
        $this->film = $film;
    }
    
    function get_film(){
        return $this->film;
    }
    function set_role($role){
        $this->role = $role;
    }
    
    function get_role(){
        return $this->role;
    }

}
    




    // toString




        //acteur film role
?>