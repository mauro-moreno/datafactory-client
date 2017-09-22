<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\Status;
use PHPUnit\Framework\TestCase;

class StatusTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $status = new Status;
        $this->assertEquals($status, $status->setId(1));
        $this->assertEquals(1, $status->getId());
        $this->assertEquals($status, $status->setValue('status_value'));
        $this->assertEquals('status_value', $status->getValue());
    }

}
