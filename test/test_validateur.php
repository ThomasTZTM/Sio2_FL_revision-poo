<?php

require_once "./vendor/autoload.php";

use App\Validateur;

$validateur = new Validateur();

$nombre=-10;
if ($validateur->verifieNombre($nombre)){
    echo "Le nombre $nombre est valide";
}else{
    echo "Le nombre $nombre n'est pas valide";
}