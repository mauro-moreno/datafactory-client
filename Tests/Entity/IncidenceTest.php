<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Incidence;
use MauroMoreno\DataFactory\Entity\IncidenceKey;
use MauroMoreno\DataFactory\Entity\IncidencePlayer;
use PHPUnit\Framework\TestCase;

class IncidenceTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $incidence = new Incidence;

        $key = new IncidenceKey;
        $player = new IncidencePlayer;

        $this->assertEquals($incidence, $incidence->setId(1));
        $this->assertEquals(1, $incidence->getId());
        $this->assertEquals($incidence, $incidence->setExtraCode('incidence_extra_code'));
        $this->assertEquals('incidence_extra_code', $incidence->getExtraCode());
        $this->assertEquals($incidence, $incidence->setIncidenceId(1));
        $this->assertEquals(1, $incidence->getIncidenceId());
        $this->assertEquals($incidence, $incidence->setKey($key));
        $this->assertEquals($key, $incidence->getKey());
        $this->assertEquals($incidence, $incidence->setMinute(1));
        $this->assertEquals(1, $incidence->getMinute());
        $this->assertEquals($incidence, $incidence->setOrder(1));
        $this->assertEquals(1, $incidence->getOrder());
        $this->assertEquals($incidence, $incidence->setPlayer($player));
        $this->assertEquals($player, $incidence->getPlayer());
        $this->assertEquals($incidence, $incidence->setPlayerIn($player));
        $this->assertEquals($player, $incidence->getPlayerIn());
        $this->assertEquals($incidence, $incidence->setPlayerOut($player));
        $this->assertEquals($player, $incidence->getPlayerOut());
        $this->assertEquals($incidence, $incidence->setSecond(1));
        $this->assertEquals(1, $incidence->getSecond());
        $this->assertEquals($incidence, $incidence->setSubtype('incidence_subtype'));
        $this->assertEquals('incidence_subtype', $incidence->getSubtype());
        $this->assertEquals($incidence, $incidence->setTeamShortName('incidence_team_short_name'));
        $this->assertEquals('incidence_team_short_name', $incidence->getTeamShortName());
        $this->assertEquals($incidence, $incidence->setTime('incidence_time'));
        $this->assertEquals('incidence_time', $incidence->getTime());
        $this->assertEquals($incidence, $incidence->setType('incidence_type'));
        $this->assertEquals('incidence_type', $incidence->getType());
    }

}
