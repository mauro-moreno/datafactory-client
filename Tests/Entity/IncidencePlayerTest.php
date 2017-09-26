<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\IncidencePlayer;
use PHPUnit\Framework\TestCase;

class IncidencePlayerTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $incidencePlayer = new IncidencePlayer();
        $this->assertEquals($incidencePlayer, $incidencePlayer->setId(1));
        $this->assertEquals(1, $incidencePlayer->getId());
        $this->assertEquals($incidencePlayer, $incidencePlayer->setName('incidence_player_name'));
        $this->assertEquals('incidence_player_name', $incidencePlayer->getName());
    }

}
