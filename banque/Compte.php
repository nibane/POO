

<?php

class Compte {
    private string $libelle;
    private int $solde;
    private string $devise;
    private Titulaire $titulaire;

    function __construct(string $libelle, int $solde, string $devise ,Titulaire $titulaire){
        $this->libelle = $libelle;
        $this->solde = $solde;
        $this->devise = $devise;
        $this->titulaire = $titulaire;
        $titulaire->ajouterCompte($this);
    }
    function set_libelle($libelle){
        $this->libelle = $libelle;
    }

    function get_libelle(){
        return $this->libelle;
    }
    function set_solde($solde){
        $this->solde = $solde;
    }
    
    function get_solde(){
        return $this->solde;
    }
    
    function set_devise($devise){
        $this->devise = $devise;
    }
    
    function get_devise(){
        return $this->devise;
    }
    
    function set_titulaire($titulaire){
        $this->titulaire = $titulaire;
    }
    
    function get_titulaire(){
        return $this->titulaire;
    }

    public function crediter(float $crediter){
        $this->solde += $crediter;
        echo "Le compte ".$this->libelle." de " .$this->titulaire." a été créditer de ".$crediter;
    }
    public function debiter(float $debiter){
        $this->solde -= $debiter;
        echo "Le compte ".$this->libelle." de ".$this->titulaire." a été débiter de ".$debiter;
    }
    public function virement(Compte $receveur, float $montant){
        $this->debiter($montant);
        $receveur->crediter($montant);

    }
    public function __toString(){
        return $this->libelle . " " . $this->solde . " " . $this->devise . " " . $this->titulaire;
    }
    
}

?>