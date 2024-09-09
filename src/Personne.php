<?php

namespace App;

use App\Entite\Equipe;

class Personne
{
    private $nom;

    public function __construct($nom){
        $this->nom = $nom;
    }
    public function getNom(){
        return $this->nom;
    }

    public function liker(Equipe $equipe) : void {
        $equipe->incrementerNbLikes();
    }


}