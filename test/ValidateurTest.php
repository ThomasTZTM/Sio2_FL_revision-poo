<?php
require "vendor/autoload.php";
use App\Validateur;
use PHPUnit\Framework\TestCase;


class ValidateurTest extends TestCase
{
    private \App\Validateur $validateur;
    protected function setUp() : void
    {
        // cette méthode est appelé lors de l'execution de chaque test
        $this->validateur = new Validateur();
    }

    public function testValidateur_ResultatJuste_TestFonctionnel()
    {

        // Assert
        $this->assertTrue(True);
    }

    public function testValidateurDeNombre1_Si_Chiffre_Est_Positif_TestJuste()
    {
        // Arrange
        $chiffre = 7;
        // Act
        $resultat = $this->validateur->verifieNombre($chiffre);
        // Assert
        $this->assertEquals(True, $resultat);
    }

    public function testValidateurDeNombre2_Si_Chiffre_Est_Negatif_TestJuste()
    {
        //Vérification de l'exeption
        $this->expectException(Exception::class);
        $this->expectExceptionMessage("Le nombre doit etre positif");
        // Arrange
        $chiffre = -5;
        // Act
        $this->validateur->verifieNombre2($chiffre);
    }
}
