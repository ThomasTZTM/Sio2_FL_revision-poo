<?php
require "vendor/autoload.php";
use App\Validateur;
use PHPUnit\Framework\TestCase;


class ValidateurTest extends TestCase
{

    public function testValidateur_ResultatJuste_TestFonctionnel()
    {

        // Assert
        $this->assertTrue(True);
    }

    public function testValidateurDeNombre1_Si_Chiffre_Est_Positif_TestJuste()
    {
        // Arrange
        $validateurr = new Validateur();
        $chiffre = 7;
        // Act
        $resultat = $validateurr->verifieNombre($chiffre);
        // Assert
        $this->assertEquals(True, $resultat);
    }

    public function testValidateurDeNombre2_Si_Chiffre_Est_Negatif_TestJuste()
    {
        //Vérification de l'exeption
        $this->expectException(Exception::class);
        // Arrange
        $validateurr = new Validateur();
        $chiffre = -5;
        // Act
        $validateurr->verifieNombre2($chiffre);
    }
}
