<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Tournament;
use PHPUnit\Framework\TestCase;

class TournamentTest extends TestCase
{
    public function test_getters_and_setters_ok()
    {
        $tournament = new Tournament;
        $this->assertEquals($tournament, $tournament->setId(1));
        $this->assertEquals(1, $tournament->getId());
        $this->assertEquals($tournament, $tournament->setValue('tournament_value'));
        $this->assertEquals('tournament_value', $tournament->getValue());
    }
}
