<h1>Exercice 1<h/1>

<p>I.BanqueVous êtes chargé(e) de créer un projet orienté objet permettant de gérer des titulaires et leurs comptes bancaires respectifs.Un compte bancaire est composé des éléments suivants :Un libellé (compte courant, livret A, ...)Un solde initialUne devise monétaireUn titulaire uniqueUn titulaire comporte :UnnomUn prénomUne date de naissanceUne villeL'ensemble de ses comptes bancaires.Sur un compte bancaire, on doit pouvoir :Créditer le compte de X eurosDébiter le compte de X eurosEffectuer un virement d'un compte à l'autre.On doit pouvoir :Affichertoutes  les  informations  d'un(e)  titulaire  (dont  l'âge)  et  l'ensemble  des  comptes appartenant à celui(celle)-ci.Afficher  toutes  les  informations  d'un  compte  bancaire,  notamment  le  nom  /  prénom  du titulaire du compte.</p>

<h2>Résultat</h2>


<?php
// require "Titulaire.php";
// require "Compte.php";

spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});

$p1 = new Titulaire("Omeyer", "balthazar", "09/01/1991", "Lune");
$c1 = new Compte("Compte courant", 500, "euro", $p1);

echo $p1.'<br>';
echo $c1->info().'<br><br>';

$p2 = new Titulaire("Potter", "Harry", "10/10/95", "4 Privet Drive");
$c2 = new Compte("Compte courant", 5000, "euro", $p2);


echo $p2.'<br>';
echo $c2->info() . '<br><br>';


echo $c1->virement($c2,200).'<br>';
echo $c1->info().'<br>';
echo $c2->info();
 


?>