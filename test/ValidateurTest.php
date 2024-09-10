<?php
require "vendor/autoload.php";
use App\Validateur;
use PHPUnit\Framework\TestCase;


class ValidateurTest extends TestCase
{

    public function testValidateur1Init()
    {

        // Assert
        $this->assertTrue(True);
    }

    public function testValidateur2()
{
    // Arrange
    $chiffre = 7;
    // Act
    $resultat = new Validateur($chiffre);
    // Assert
    $this->assertEquals(True, $resultat);
}

    public function testValidateur3()
{
    // Arrange
    $chiffre = -5;
    // Act
    $resultat = new Validateur($chiffre);
    // Assert
    $this->assertEquals(False, $resultat);
}
}
