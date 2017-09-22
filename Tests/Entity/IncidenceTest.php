<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Incidence;
use PHPUnit\Framework\TestCase;

class IncidenceTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $incidence = new Incidence;
        $this->assertEquals($incidence, $incidence->setId(1));
        $this->assertEquals(1, $incidence->getId());
    }

}
