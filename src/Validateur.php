<?php

namespace App;

class Validateur
{
    // Méthode qui vérifie si un nombre est strictement positif
    // On teste toujours le cas d'erreur en premier
    public function verifieNombre(int $nombre): bool
    {
        if ($nombre <= 0) {
            return false;
        }
        return true;
    }

    public function verifieNombre2(int $nombre): bool
    {
        if ($nombre <= 0) {
            //lancer une exception
            throw new \Exception('Le nombre doit etre positif');
        }
        return true;
    }

}