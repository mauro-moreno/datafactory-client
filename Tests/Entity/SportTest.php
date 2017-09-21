<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Sport;
use PHPUnit\Framework\TestCase;

class SportTest extends TestCase
{
    public function test_getters_and_setters_ok()
    {
        $sport = new Sport;
        $this->assertEquals($sport, $sport->setId(1));
        $this->assertEquals(1, $sport->getId());
        $this->assertEquals($sport, $sport->setValue('sport_value'));
        $this->assertEquals('sport_value', $sport->getValue());
    }
}
