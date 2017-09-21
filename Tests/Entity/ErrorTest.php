<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Error;
use PHPUnit\Framework\TestCase;

class ErrorTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $error = new Error;
        $this->assertEquals($error, $error->setValue('error_value'));
        $this->assertEquals('error_value', $error->getValue());
    }

}