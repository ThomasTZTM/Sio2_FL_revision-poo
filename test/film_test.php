<?php

require_once "../src/film.php";
require_once "../src/acteur.php";

$film1 = new Film("Fast And Furious", "Rob Cohen", DateTime::createFromFormat("d/m/Y", "12/03/2003"));

echo $film1->getTitre();
echo PHP_EOL;
echo $film1->getDiff()." ans";

$film1 -> ajouteracteur(new Acteur("jean", "pierre"));
$film1 -> ajouteracteur(new Acteur("dany", "iloè"));
print_r($film1->getActeurs());

// Afficher le nom des acteurs

/**
 * @return Acteur[]
 */
// /^ c'est pour ne pas faire bug le IDE
foreach ($film1->getActeurs() as $acteur) {
    echo " | ".$acteur->getPrenom()." ".$acteur->getNom();
}