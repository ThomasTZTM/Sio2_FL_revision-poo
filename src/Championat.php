<?php

namespace App;
use App\Entite\Equipe;

class Championat
{
    private string $nom;
    // Association avec Equipe (one to many)
    private array $equipes = [];

    function __construct(string $nom){
        $this->nom = $nom;
    }

    public function getNom(): string{
        return $this->nom;
    }


    public function ajouterEquipe(Equipe $equipe) : void{
        $this->equipes[] = $equipe;
    }

    function getNbEquipes() : int{
        return count($this->equipes);
    }

}
