<h1>Exercice 2<h/1>

<p>Vous êtes chargé(e) de créer un projet orienté objet permettant de gérer des livres et leurs auteurs respectifs.Les livres sont caractérisés par un titre, un nombre de pages, une année de parution, un prix et un auteur. Un auteur comporte un nom et un prénom.Une méthode toString() sera appréciée dans chacune de vos classes.Vous implémenterez une méthode afficherBibliographie() qui permettra d'afficher la bibliographie complète d'un auteur :</p>

<h2>Résultat</h2>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});


$A1 = new Auteur("Stephen", "King", "https://www.senscritique.com/liste/stephen_king_e_bibliographie_complete/48872");

echo $A1." ".$A1->getBiblio()."<br>";

$L1 = new Livre("Ca", 1138, "1986", 20, $A1);
echo $L1."<br><br>";

$L2 = new Livre("Simetierre", 374, "1983", 15 , $A1);
$L3 = new Livre("Le Fléau", 823, "1978", 14, $A1);
$L4 = new Livre("Shining", 447, "1977", 16, $A1);

echo "liste des livre<br>";

$A1->tlivre();

?>