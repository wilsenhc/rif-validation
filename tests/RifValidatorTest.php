<?php

namespace Wilsenhc\RifValidation\Tests\Rules;

use PHPUnit\Framework\TestCase;
use Wilsenhc\RifValidation\RifValidator;

class RifValidatorTest extends TestCase
{
    public function testValidRif()
    {
        $validator = new RifValidator();

        // Valid RIF of "Universidad de Carabobo"
        $rif = 'G-20000041-4';

        $this->assertTrue($validator->isValid($rif));

        // Valid RIF of "Banesco Banco Universal"
        $rif = 'J-07013380-5';

        $this->assertTrue($validator->isValid($rif));

        // Valid RIF of "Nicolas Maduro Moros"
        $rif = 'V-05892464-0';

        $this->assertTrue($validator->isValid($rif));
    }

    public function testItWillReturnFalseIfFormatIsInvalid()
    {
        $validator = new RifValidator();

        // Starts with a RIF Type that doesn't exist
        $rif = 'Q-00000000-0';

        $this->assertFalse($validator->isValid($rif));

        // Extra number
        $rif = 'G-200000041-4';

        $this->assertFalse($validator->isValid($rif));

        // Missing numbers
        $rif = 'V-5892464';

        $this->assertFalse($validator->isValid($rif));

        // Letter where there should be only numbers
        $rif = 'G-200F00041-F';

        $this->assertFalse($validator->isValid($rif));
    }

    public function testItWillConvertValuesToUppercaseBeforeTesting()
    {
        $validator = new RifValidator();
        // Valid RIF of "Universidad de Carabobo"
        $rif = 'g-20000041-4';

        $this->assertTrue($validator->isValid($rif));

        // Valid RIF of "Banesco Banco Universal"
        $rif = 'j-07013380-5';

        $this->assertTrue($validator->isValid($rif));

        // Valid RIF of "Nicolas Maduro Moros"
        $rif = 'v-05892464-0';

        $this->assertTrue($validator->isValid($rif));
    }
}
