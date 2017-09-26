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
        $this->assertEquals($matchSheet, $matchSheet->setDay('match_sheet_day'));
        $this->assertEquals('match_sheet_day', $matchSheet->getDay());
        $this->assertEquals($matchSheet, $matchSheet->setHour('match_sheet_hour'));
        $this->assertEquals('match_sheet_hour', $matchSheet->getHour());
        $this->assertEquals($matchSheet, $matchSheet->setLevel('match_sheet_level'));
        $this->assertEquals('match_sheet_level', $matchSheet->getLevel());
        $this->assertEquals($matchSheet, $matchSheet->setHourStatus('match_sheet_hour_status'));
        $this->assertEquals('match_sheet_hour_status', $matchSheet->getHourStatus());
        $this->assertEquals($matchSheet, $matchSheet->setIncidences([]));
        $this->assertEquals([], $matchSheet->getIncidences());
        $this->assertEquals($matchSheet, $matchSheet->setInstance('match_sheet_instance'));
        $this->assertEquals('match_sheet_instance', $matchSheet->getInstance());
        $this->assertEquals($matchSheet, $matchSheet->setStatus($status));
        $this->assertEquals($status, $matchSheet->getStatus());
        $this->assertEquals($matchSheet, $matchSheet->setTeams([]));
        $this->assertEquals([], $matchSheet->getTeams());
        $this->assertEquals($matchSheet, $matchSheet->setTimezone(0));
        $this->assertEquals(0, $matchSheet->getTimezone());
        $this->assertEquals($matchSheet, $matchSheet->setType('match_sheet_type'));
        $this->assertEquals('match_sheet_type', $matchSheet->getType());
    }

}
