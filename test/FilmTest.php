<?php
require "vendor/autoload.php";
use App\Film;
use App\Acteur;
use PHPUnit\Framework\TestCase;

class FilmTest extends TestCase
{

    private \App\Film $film;
    private \App\Acteur $acteur;
    protected function setUp() : void
    {
        $titrePourTest="Pascal et ses BDD";
        $realisateurPourTest="Nolan Hamilcarosserie";
        $datePourTest=DateTime::createFromFormat("d/m/Y", "12/03/2003");

        // cette méthode est appelé lors de l'execution de chaque test
        $this->film = new Film($titrePourTest, $realisateurPourTest, $datePourTest);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function ajouterActeur_Si_Acteur_Ajouter_Alors_TestJuste()
    {
        //Vérification de l'exeption
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Pascal est porté disparue");
        // Arrange
        $acteurPourTest = new Acteur("Ramseyer", "Pascal");
        // Act
        $resultat=$this->film->ajouteracteur($acteurPourTest);
        $this->assertTrue($resultat);
    }


}
