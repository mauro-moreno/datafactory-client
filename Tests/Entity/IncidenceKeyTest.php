<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\IncidenceKey;
use PHPUnit\Framework\TestCase;

class IncidenceKeyTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $incidenceKey = new IncidenceKey();
        $this->assertEquals($incidenceKey, $incidenceKey->setId(1));
        $this->assertEquals(1, $incidenceKey->getId());
        $this->assertEquals($incidenceKey, $incidenceKey->setValue('incidence_key_value'));
        $this->assertEquals('incidence_key_value', $incidenceKey->getValue());
    }

}
