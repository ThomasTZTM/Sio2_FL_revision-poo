<?php

namespace App;
use PHPUnit\Framework\TestCase;
use DateTime;

class Film
{
    // Attributs
    private string $titre;
    private string $realisateur;
    private DateTime $dateSortie;
    private array $acteurs = [];

    //Méthodes
    //Constructeur permettant de créer des instances d'une classe
    // Instanciation
    public function __construct(string $titre, string $realisateur, DateTime $dateSortie)
    {
        $this->titre = $titre;
        $this->realisateur = $realisateur;
        $this->dateSortie = $dateSortie;
    }

    public function getTitre(): string
    {
        return $this->titre;
    }

    public function getRealisateur(): string
    {
        return $this->realisateur;
    }

    public function getDateSortie(): DateTime
    {
        return $this->dateSortie;
    }

    public function setTitre(string $titre): void
    {
        $this->titre = $titre;
    }

    public function setRealisateur(string $realisateur): void
    {
        $this->realisateur = $realisateur;
    }

    public function getDiff(): int
    {
        $dateJour = new DateTime();
        $intervalle = $dateJour->diff($this->dateSortie);
        return $intervalle->y;
    }

    public function ajouteracteur(Acteur $acteur): bool
    {
        if ( (in_array($acteur, $this->getActeurs()))  ) {
            throw new \Exception('OOOOOO Pascal est déjà là ! grand fou');
        }
        $this->acteurs[] = $acteur;
        if ( !(in_array($acteur, $this->getActeurs()))  ) {
            throw new \Exception('Pascal est porté disparue');
        }else{
            return true;
        }
    }



    public function getActeurs(): array
    {
        return $this->acteurs;
    }


}

