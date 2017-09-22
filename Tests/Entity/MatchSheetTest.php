<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\MatchSheet;
use MauroMoreno\DataFactory\Entity\Status;
use PHPUnit\Framework\TestCase;

class MatchSheetTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $matchSheet = new MatchSheet;
        $status = new Status;
        $this->assertEquals($matchSheet, $matchSheet->setId(1));
        $this->assertEquals(1, $matchSheet->getId());
        $this->assertEquals($matchSheet, $matchSheet->setDate(1));
        $this->assertEquals(1, $matchSheet->getDate());
        $this->assertEquals($matchSheet, $matchSheet->setDay('day_value'));
        $this->assertEquals('day_value', $matchSheet->getDay());
        $this->assertEquals($matchSheet, $matchSheet->setHour('hour_value'));
        $this->assertEquals('hour_value', $matchSheet->getHour());
        $this->assertEquals($matchSheet, $matchSheet->setHourStatus('hour_status_value'));
        $this->assertEquals('hour_status_value', $matchSheet->getHourStatus());
        $this->assertEquals($matchSheet, $matchSheet->setIncidences([]));
        $this->assertEquals([], $matchSheet->getIncidences());
        $this->assertEquals($matchSheet, $matchSheet->setInstance('instance_value'));
        $this->assertEquals('instance_value', $matchSheet->getInstance());
        $this->assertEquals($matchSheet, $matchSheet->setStatus($status));
        $this->assertEquals($status, $matchSheet->getStatus());
        $this->assertEquals($matchSheet, $matchSheet->setTeams([]));
        $this->assertEquals([], $matchSheet->getTeams());
        $this->assertEquals($matchSheet, $matchSheet->setTimezone(0));
        $this->assertEquals(0, $matchSheet->getTimezone());
        $this->assertEquals($matchSheet, $matchSheet->setType('type_value'));
        $this->assertEquals('type_value', $matchSheet->getType());
    }

}
