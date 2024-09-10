<?php

require_once "./vendor/autoload.php";

use App\Validateur;

$validateur = new Validateur();

$nombre=10;
if ($validateur->verifieNombre($nombre)){
    echo "Le nombre $nombre est valide";
}else{
    echo "Le nombre $nombre n'est pas valide";
}

// Avec gestion des exceptions.
echo PHP_EOL;
try{
    // Code surveiller suceptible de déclanché une exception
    $validateur->verifieNombre2($nombre);
    echo "Le nombre $nombre est valide";
} catch (Exception $e){
    // Exception rattrapé si lancer
    echo $e->getMessage();
}

// Avec gestion des exceptions.
echo PHP_EOL;
$mdp="michalll";
try{
    // Code surveiller suceptible de déclanché une exception
    $validateur->verificateurMdp($mdp);
    echo "Le mdp est valide";
} catch (Exception $e){
    // Exception rattrapé si lancer
    echo $e->getMessage();
}

