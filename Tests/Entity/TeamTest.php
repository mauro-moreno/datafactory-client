<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Team;
use PHPUnit\Framework\TestCase;

class TeamTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $team = new Team;
        $this->assertEquals($team, $team->setId(1));
        $this->assertEquals(1, $team->getId());
        $this->assertEquals($team, $team->setCountryId(1));
        $this->assertEquals(1, $team->getCountryId());
        $this->assertEquals($team, $team->setGoals(1));
        $this->assertEquals(1, $team->getGoals());
        $this->assertEquals($team, $team->setPenaltyGoals(1));
        $this->assertEquals(1, $team->getPenaltyGoals());
        $this->assertEquals($team, $team->setShortName('team_value'));
        $this->assertEquals('team_value', $team->getShortName());
    }

}
