<?php

namespace App;
use PHPUnit\Framework\TestCase;

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

    public function verificateurMdp(string $mdp): bool{

        $taille_mdp = strlen($mdp);

        $condition1 = false;
        $existeNumeric = false;
        $existeMajuscule = false;
        $existeMinuscule = false;

        $cpt = 0;
        while($cpt<$taille_mdp){
            $lettre_mdp = substr($mdp, $cpt, 1);
            //Test pour afficher les lettres qui passent dans les IF
            //Condition de la taille
            if ($taille_mdp>=8) {
                $estBonTaille = true;
            }
            //Condition des majuscules
            if (ctype_upper($lettre_mdp)){
                $existeMajuscule = true;
            }
            //Condition des minuscules
            if (ctype_lower($lettre_mdp)){
                $existeMinuscule = true;
            }
            //Condtition des chiffres
            if (is_numeric($lettre_mdp)){
                $existeNumeric = true;
            }
            // Passe à la prochaine lettre
            $cpt ++;
        }

        if ($estBonTaille==false){
            throw new \Exception('Le mot de passe doit contenir au moins 8 caracteres');
        }elseif ($existeNumeric==false){
            throw new \Exception('Le mot de passe doit contenir au moins un chiffre');
        }elseif ($existeMajuscule==false){
            throw new \Exception('Le mot de passe doit contenir au moins une majuscule');
        }elseif ($existeMinuscule==false){
            throw new \Exception('Le mot de passe doit contenir au moins une minuscule');
        }

        if (($estBonTaille>0) and ($existeNumeric>0) and ($existeMajuscule>0) and ($existeMinuscule>0)){
            return true;
        }

    }

}