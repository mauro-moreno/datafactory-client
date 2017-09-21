<?php

namespace MauroMoreno\DataFactory\Tests\Entity;

use MauroMoreno\DataFactory\Entity\ChannelBag;
use PHPUnit\Framework\TestCase;

class ChannelBagTest extends TestCase
{

    public function test_getters_and_setters_ok()
    {
        $channels = new ChannelBag;
        $this->assertEquals($channels, $channels->setChannels([]));
        $this->assertEquals([], $channels->getChannels());
    }

}
