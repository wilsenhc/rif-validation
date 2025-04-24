<?php

namespace Wilsenhc\RifValidation\Tests\Rules;

use PHPUnit\Framework\TestCase;
use Wilsenhc\RifValidation\RifValidator;

class RifValidatorTest extends TestCase
{
    public function testValidRif()
    {
        $rif = new RifValidator();

        $this->assertTrue($rif->isValid('J-12345678-9'));
    }

    public function testInvalidRif()
    {
        $rif = new RifValidator();

        $this->assertFalse($rif->isValid('J-12345678-0'));
    }

    public function testEmptyRif()
    {
        $rif = new RifValidator();

        $this->assertFalse($rif->isValid(''));
    }

    public function testInvalidFormatRif()
    {
        $rif = new RifValidator();

        $this->assertFalse($rif->isValid('12345678'));
    }
}
