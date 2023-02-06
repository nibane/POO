<h1>Exercice 1<h/1>

<p>I.BanqueVous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.Un compte bancaire est composé des éléments suivants :Un libellé (compte courant, livret A, ...)Un solde initialUne devise monétaireUn titulaire uniqueUn titulaire comporte :UnnomUn prénomUne date de naissanceUne villeL'ensemble de ses comptes bancaires.Sur un compte bancaire, on doit pouvoir :Créditer le compte de X eurosDébiter le compte de X eurosEffectuer un virement d'un compte à l'autre.On doit pouvoir :Affichertoutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.</p>

<h2>Résultat</h2>


<?php
require "Compte.php";
class Titulaire {
    public string $nom;
    public string $prenom;
    public DateTime $naissance;
    public string $ville;
    public array $allcompte;

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


    function getInfos() {
        return "plop";
    }

    function __toString() {
        return $this->nom . " " . $this->prenom;
    }

    




}

?>