
<?php


class Livre {
    
    private string $titre;
    private int $nbPage;
    private DateTime $parution;
    private int $prix;
    private Auteur $auteur;

    function __construct(string $titre, int $nbPage, string $parution, int $prix, Auteur $auteur){
        $this->titre = $titre;
        $this->nbPage = $nbPage;
        $this->parution = new DateTime($parution);
        $this->prix = $prix;
        $this->auteur = $auteur;
        $auteur->ajouterLivre($this);
    }
    function set_titre($titre){
        $this->titre = $titre;
    }

    function get_titre(){
        return $this->titre;
    }
    function set_nbPage($nbPage){
        $this->nbPage = $nbPage;
    }

    function get_nbPage(){
        return $this->nbPage;
    }
    function set_parution($parution){
        $this->parution = $parution;
    }

    function get_parution(){
        return $this->parution;
    }
    function set_prix($prix){
        $this->prix = $prix;
    }

    function get_prix(){
        return $this->prix;
    }
    function set_auteur($auteur){
        $this->auteur = $auteur;
    }

    function get_auteur(){
        return $this->auteur;
    }
    
    function __toString(){
        return $this->titre." ".$this->nbPage." pages ".$this->parution->format('Y')." coûte ".$this->prix."€ l'auteur est : " .$this->auteur."<br>";
    }
    
   
    

}


?>