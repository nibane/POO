<h1>Exercice 6<h/1>

<p>I.BanqueVous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.Un compte bancaire est composé des éléments suivants :Un libellé (compte courant, livret A, ...)Un solde initialUne devise monétaireUn titulaire uniqueUn titulaire comporte :UnnomUn prénomUne date de naissanceUne villeL'ensemble de ses comptes bancaires.Sur un compte bancaire, on doit pouvoir :Créditer le compte de X eurosDébiter le compte de X eurosEffectuer un virement d'un compte à l'autre.On doit pouvoir :Affichertoutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.</p>

<h2>Résultat</h2>


<?php

class Compte {
    public string $libelle;
    public int $solde;
    public int $devise;
    public string $titulaire;

    function __construct(string $libelle, int $solde, int $devise ,string $titulaire){
    $this->libelle = $libelle;
    $this->solde = $solde;
    $this->devise = $devise;
    $this->titulaire = $titulaire;
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
}

?>