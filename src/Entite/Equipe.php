<?php

namespace App\Entite;

class Equipe
{
    private string $nom;
    private int $nbLikes;

    function __construct(string $nom){
        $this->nom = $nom;
        $this->nbLikes = 0;
    }

    /**
     * @return int
     */
    public function getNbLikes(): int
    {
        return $this->nbLikes;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->nom;
    }

    public function incrementerNbLikes() : void{
        $this->nbLikes++;
    }



}

