
<?php

class Auteur {
    
    private string $nom;
    private string $prenom;
    private array $livre;
    private string $biblio;

    
    function __construct(string $nom, string $prenom, string $biblio){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->livre = [];
        $this->biblio = $biblio;
    }








    function __toString(){
        return $this->nom . ' ' . $this->prenom;
    }

    public function ajouterLivre(Livre $livre){
        $this->livre[] = $livre;
    }

    public function getBiblio() {
        return "<a href='$this->biblio'>Lien bibliographie</a>";
    }
    public function tlivre(){
        foreach ($this->livre as $L)
            echo $L;
    }
}
    

?>