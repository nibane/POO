

<?php
class Titulaire {
    private string $nom;
    private string $prenom;
    private DateTime $naissance;
    private string $ville;
    private array $allcompte;

    function __construct(string $nom, string $prenom, string $naissance ,string $ville){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->naissance = new DateTime($naissance);
        $this->ville = $ville;
        $this->allcompte = [];

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
    
    function set_naissance($naissance){
        $this->naissance = $naissance;
    }
    
    function get_naissance(){
        return $this->naissance;
    }
    
    function set_ville($ville){
        $this->ville = $ville;
    }
    
    function get_ville(){
        return $this->ville;
    }


    public function getInfos() {
        return "plop";
    }

    public function __toString() {
        return $this->nom . " " . $this->prenom . "  " . $this->ville ." ". $this->naissance->format('d/m/y') ;
    }
    public function age(){
        $date = $this->naissance;
       
        $today = new DateTime();
        $diff = date_diff($date,$today);
        echo $diff->format('%y').'ans';
    }
    public function ajouterCompte(Compte $compte){
        $this->allcompte[] = $compte;
    }




}

?>