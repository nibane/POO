<h1>Exercice <h/1>

<p>Vous avez en charge de gérer différentes entités autour de la thématique du cinéma.Les films seront caractérisés par leur titre, leur date de sortie en France, leur  durée (en minutes) ainsi que leur réalisateur (unique, avec nom, prénom, sexe et date de naissance). Un résumé du film (synopsis)  pourra  éventuellement être  renseigné.  Chaque  film  est  caractérisé  par  un  seul  genre cinématographique (science-fiction, aventure, action, ...).Votre application devra recenser également les acteurs de chacun des films. On désire connaître le nom, le prénom, le sexe et la date de naissance de l'acteur ainsi que le rôle (nom du personnage) joué par l'acteur dans le(s) film(s) concerné(s).Il serait intéressant d'utiliser la notion d'héritage entre classes dans cet exercice. A vous de le mettre en place correctement !Attention, le rôle (par exemple James Bond) ne doit être instancié qu'une seule fois (dans la mesure où ce rôle a été incarné par plusieurs acteurs.)On doit pouvoir :Lister la liste des acteurs ayant incarné un rôle précis (ex: les acteurs ayant joué le rôle de Batman : Michael Keaton, Val Kilmer, George Clooney, ...)Lister  le  casting  d'un  film  (dans  le  film  Star  Wars  Episode  IV,  Han  Solo  a  été  incarné  par Harrison Ford, Luke Skywalker a été incarné par Mark Hamill, ...)Lister  les  films  par  genre  (exemple  :  le  genre SF  est  associé  à  X  films  :  Star  Wars,  Blade Runner, ...)Lister la filmographie d'un acteur (dans quels films a-t-il joué ?)Lister la filmographie d'un réalisateur (quels sont les films qu'a réalisé ce réalisateur ?)</p>

<h2>Résultat</h2>


<?php

spl_autoload_register(function ($class_name) {
    require $class_name . ".php";
});

$fa = new Genre("Fantastique");
$po = new Genre("Policier");
$ho = new Genre("Horreur");
$av = new Genre("Aventure");
$sf = new Genre("Science-fiction");


$R1 = new Realisateur("Christopher", "Nolan", "Homme", "1970/07/30");

$F1 = new Film("Batman", 2025, 140, $R1, $po);

$R2 = new Realisateur("George", "Lucas", "Homme", "1944/03/14");

$F2 = new Film("Star wars", 1977, 121, $R2, $sf);

$R3 = new Realisateur("Peter", "Jackson", "Homme", "1961/10/31");

$F3 = new Film ("Le Seigneur des anneaux", 2001,178 ,$R3 ,$fa);


$A1 = new Acteur ("George","Clooney");
$R1 = new Role ("Batman");
$C1 = new Casting ($A1,$F1,$R1);

echo $C1

// echo $R1->afficherFilms()."<br>";
// echo $R2->afficherFilms()."<br>";
// echo $R3->afficherFilms()."<br>";






?>